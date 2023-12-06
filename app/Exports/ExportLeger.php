<?php

namespace App\Exports;
use DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\NilaiAkhir;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportLeger implements FromCollection , WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    private $nisn;

    public function __construct($nisn)
    {
        $this->nisn = $nisn;
    }
    public function collection()
    {
        $nisn_temp = $this->nisn;
        $data = DB::select(
            "WITH result AS (
                SELECT
                    ns.nisn,
                    ns.id_mapel_kelas,
                    SUM(ns.nilai) AS sum_nilai, 
                    AVG(ns.nilai) AS avg_nilai,
                    COUNT(ns.nilai) AS total_nilai,
                    mp.id,
                    MAX(mp.kkm) AS kkm,
                    MAX(mp.semester) AS semester,
                    MAX(mp.id_tahun_akademik) AS id_tahun_akademik,
                    MAX(ta.tahun_akademik) AS tahun_akademik
                FROM nilai_siswa AS ns 
                LEFT JOIN mata_pelajaran AS mp ON ns.id_mapel_kelas = mp.id
                LEFT JOIN tahun_akademik AS ta ON mp.id_tahun_akademik = ta.id
                GROUP BY ns.nisn, mp.id, ns.id_mapel_kelas
                HAVING MAX(ta.tahun_akademik) = (SELECT tahun_pelajaran FROM informasi_sekolah LIMIT 1) 
                AND MAX(mp.semester) = (SELECT semester FROM informasi_sekolah LIMIT 1)
            ),
            resultNilai AS(
                SELECT 
                        MAX(r.nisn) AS nisn ,
                        MAX(r.semester) AS semester,
                        MAX(r.tahun_akademik) AS tahun_akademik,
                        SUM(r.avg_nilai) AS sum_nilai,
                        AVG(r.avg_nilai) AS avg_nilai,
                        MAX(r.total_nilai) AS total_nilai , 
                        MAX(r.kkm) AS kkm ,
                        SUM(
                                CASE
                                        WHEN r.avg_nilai < r.kkm THEN 1
                                        WHEN r.avg_nilai = 0 THEN 1
                                        ELSE 0
                                END
                        ) AS bawah_kkm,
                        SUM(
                                CASE
                                        WHEN r.avg_nilai >= r.kkm THEN 1
                                        ELSE 0
                                END 
                        ) AS atas_kkm
                FROM result AS r 
                GROUP BY nisn
            )
            
                SELECT 
                    RANK() OVER (PARTITION BY dk.id_user ORDER BY MAX(rn.avg_nilai) DESC) AS ranking,
                    dk.id_user AS id_user_wali_kelas,
                    MAX(dk.nama_lengkap) AS nama_wali_kelas,
                    ds.nama_lengkap,
                    MAX(ds.id_kelas) AS id_kelas,
                    MAX(k.kelas) AS kelas,
                    MAX(k.tingkat) AS tingkat,
                    ns.nisn , 
                    ROUND(MAX(rn.sum_nilai),2) AS sum_nilai,
                    ROUND(MAX(rn.avg_nilai),2) AS avg_nilai,
                    MAX(rn.total_nilai) AS total_nilai,
                    MAX(rn.bawah_kkm) AS bawah_kkm,
                    MAX(rn.atas_kkm) AS atas_kkm,
                    MAX(mp.id) AS id_mapel,
                    MAX(mp.nama_mapel) AS nama_mapel,
                    mp.semester , 
                    mp.id_tahun_akademik,
                    ta.tahun_akademik
                FROM nilai_siswa AS ns 
                LEFT JOIN resultNilai AS rn ON ns.nisn = rn.nisn
                LEFT JOIN mata_pelajaran AS mp ON ns.id_mapel_kelas = mp.id
                LEFT JOIN tahun_akademik AS ta ON mp.id_tahun_akademik = ta.id
                LEFT JOIN detail_siswa AS ds ON ns.nisn = ds.nisn
                LEFT JOIN kelas AS k ON ds.id_kelas = k.id
                LEFT JOIN detail_karyawan AS dk ON k.id_wali_kelas = dk.id
                WHERE dk.id_user = $nisn_temp AND ta.tahun_akademik = (SELECT tahun_pelajaran FROM informasi_sekolah LIMIT 1) AND mp.semester = (SELECT semester FROM informasi_sekolah LIMIT 1)
                GROUP BY dk.id_user , ns.nisn , mp.semester , mp.id_tahun_akademik , mp.id
                ORDER BY MAX(mp.id) ASC"
        ); 

        $totalSiswa = DB::SELECT(
            "SELECT nisn , nama_lengkap FROM detail_siswa;"
        );

        $totalSiswa = collect($totalSiswa);

        $dataArray = [];
        $data = collect($data);

        for ($i = 0; $i < sizeof($totalSiswa); $i++) { 
            $test = $data->where('nisn', $totalSiswa[$i]->nisn)->values();

            $dataArray[] = [
                'No' => $i+1,
                'Nama Lengkap' => $totalSiswa[$i]->nama_lengkap
            ];

            $sum = 0;
        
            for ($j = 0; $j < sizeof($test); $j++) { 
                $dataArray[$i][$test[$j]->nama_mapel] = $test[$j]->avg_nilai;
                $sum += $test[$j]->avg_nilai;
            }

            $dataArray[$i]['jumlah'] = $sum;
            $dataArray[$i]['rata_rata'] = $sum / sizeof($test);
        }
        $collection = collect($dataArray);
        return $collection;
    }
    public function headings(): array
    {
        $list = DB::SELECT(
            "SELECT mp.id , mp.nama_mapel FROM nilai_akhir AS na 
            RIGHT JOIN mata_pelajaran AS mp ON na.id_mapel = mp.id
            LEFT JOIN tahun_akademik AS ta ON mp.id_tahun_akademik = ta.id
            LEFT JOIN detail_siswa AS ds ON na.nisn = ds.nisn
            WHERE TRUE AND ta.tahun_akademik = (SELECT tahun_pelajaran FROM informasi_sekolah LIMIT 1) AND mp.semester = (SELECT semester FROM informasi_sekolah LIMIT 1)
            GROUP BY mp.id"
        );
        
        $list = collect($list);
        $array = [
            'No',
            'Nama' , 
        ];
        
        for ($i = 0; $i < sizeof($list); $i++) { 
            $array[] = $list[$i]->nama_mapel; 
        }
        $array[] = 'Jumlah';
        $array[] = 'Rata-Rata';  
        
        return $array;
        
    }
}
