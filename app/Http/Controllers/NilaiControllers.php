<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataPelajaran;
use App\Models\Kelas;
use App\Models\Sumatif;
use App\Models\NilaiSiswa;
use App\Models\DetailSiswa;
use App\Models\NilaiAkhir;
use App\Models\DetailKaryawan;
use App\Models\ResultsSumatif;
use App\Models\Ekstrakulikuler;
use App\Models\TahunAkademik;
use App\Models\NilaiPancasila;
use Auth;
use DB;
use App\Imports\ImportExcel;
use App\Exports\ExportLeger;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Response;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


use Illuminate\Database\QueryException;

class NilaiControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auth = Auth::user()->id;
        $mapel = DB::SELECT(
            "SELECT mp.* , dk.id_user , dk.nama_lengkap , ta.tahun_akademik
            FROM mata_pelajaran AS mp LEFT JOIN detail_karyawan AS dk ON mp.id_guru = dk.id
            LEFT JOIN tahun_akademik AS ta ON mp.id_tahun_akademik = ta.id
            WHERE ta.tahun_akademik = (SELECT tahun_pelajaran FROM informasi_sekolah LIMIT 1) AND mp.semester = (SELECT semester FROM informasi_sekolah LIMIT 1) AND id_user = $auth"
        );
        return view('guru.inputNilaiSiswaGuru', compact('mapel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $auth = Auth::user()->id;
        $mapel = DB::SELECT(
            "SELECT mp.* , dk.id_user , dk.nama_lengkap FROM mata_pelajaran AS mp LEFT JOIN detail_karyawan AS dk ON mp.id_guru = dk.id WHERE id_user = $auth"
        );
        return view('guru.dataSiswaGuru', compact('mapel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function storeSumatif(Request $request)
    {
        $result = Sumatif::updateOrCreate(
            [
                'sumatif' => $request->sumatif,
                'id_mapel' => $request->mapel
            ],
            [
                'sumatif' => $request->sumatif,
                'id_mapel' => $request->mapel,
                'nama_sumatif' => $request->namaSumatif,
                'high_deskripsi' => $request->high_desc,
                'low_deskripsi' => $request->low_desc
            ]
        );

        if ($result->wasRecentlyCreated) {
            return back()->with('success', 'Berhasil Menambahkan Sumatif (create)');
        } else {
            return back()->with('success', 'Berhasil Memperbarui Sumatif (update)');
        }
    }

    public function indexSumatif()
    {
        $auth = Auth::user()->id;
        $mapel = DB::SELECT(
            "SELECT dk.id_user , mp.id , mp.nama_mapel FROM detail_karyawan AS dk RIGHT JOIN mata_pelajaran AS mp ON dk.id = mp.id_guru WHERE id_user = $auth"
        );
        $sumatif = DB::SELECT(
            "SELECT s.* , mp.nama_mapel , mp.id_guru , dk.id_user 
            FROM sumatif AS s LEFT JOIN mata_pelajaran AS mp ON s.id_mapel = mp.id 
            LEFT JOIN detail_karyawan AS dk ON mp.id_guru = dk.id WHERE dk.id_user = $auth"
        );

        return view('guru.kelolaSumatif', compact('mapel', 'sumatif'));
    }

    public function getSumatifByMapel($id_mapel)
    {
        $data = DB::SELECT(
            "SELECT * FROM sumatif WHERE id_mapel = $id_mapel"
        );
        return response()->json($data);
    }

    public function loadDataSiswa($id_mapel = null, $tingkat = null, $kelas = null, $sumatif = null)
    {
        $results = [];
        $whereMapel = null;
        $whereTingkat = null;
        $whereSumatif = null;
        $whereKelas = null;
        $distinct = null;

        if ($id_mapel) {
            $whereMapel = "AND mk.id_mapel = $id_mapel";
        }
        if ($tingkat) {
            $whereTingkat = "AND k.tingkat = $tingkat";
        }
        if ($kelas) {
            $whereKelas = "AND k.kelas = '$kelas'";
        }
        if ($sumatif) {
            $whereSumatif = "AND ns.id_sumatif = '$sumatif'";

            $data = DB::SELECT(DB::RAW(
                "SELECT 
                        ns.id AS id_nilai,
                        mk.id_mapel , 
                        mk.id_kelas , 
                        ns.id_sumatif,
                        ds.nisn ,
                        u.username AS nis , 
                        ds.nama_lengkap ,
                        k.kelas,
                        k.tingkat,
                        COALESCE(ns.nilai,0) AS nilai,
                        COALESCE(rs.ijin,0) AS ijin,
                        COALESCE(rs.sakit,0) AS sakit,
                        COALESCE(rs.alpha,0) AS alpha,
                        vsa.id_sumatif_tertinggi,
                        vsa.id_sumatif_terendah,
                        COALESCE(s_high.nama_sumatif, '-') AS nama_sumatif_tertinggi,
                        COALESCE(s_low.nama_sumatif, '-') AS nama_sumatif_terendah,
                        COALESCE(s_high.high_deskripsi, '-') AS sumatif_tertinggi,
                        COALESCE(s_low.low_deskripsi, '-') AS sumatif_terendah
                FROM mapel_kelas AS mk 
                RIGHT JOIN detail_siswa AS ds ON mk.id_kelas = ds.id_kelas
                LEFT JOIN users AS u ON ds.user_id = u.id
                LEFT JOIN kelas AS k ON mk.id_kelas = k.id
                LEFT JOIN nilai_siswa AS ns ON ds.nisn = ns.nisn AND mk.id_mapel = ns.id_mapel_kelas
                LEFT JOIN results_sumatif AS rs ON ds.nisn = rs.id_detail_siswa AND mk.id_mapel=rs.id_mapel
                LEFT JOIN vw_hasil_nilai AS vsa ON ds.nisn = vsa.nisn AND mk.id_mapel = vsa.id_mapel_kelas
                LEFT JOIN sumatif AS s_high ON vsa.id_sumatif_tertinggi = s_high.id
                LEFT JOIN sumatif AS s_low ON vsa.id_sumatif_terendah = s_low.id
                WHERE true $whereMapel $whereTingkat $whereKelas $whereSumatif;"
            ));
        } else {
            $data = DB::SELECT(
                "SELECT 
                            mk.id_mapel , 
                            MAX(mk.id_kelas) AS id_kelas, 
                            MAX(ds.nisn) AS nisn,
                            MAX(u.username) AS nis , 
                            MAX(ds.nama_lengkap) AS nama_lengkap,
                            MAX(k.kelas) AS kelas,
                            MAX(k.tingkat) AS tingkat
                        FROM mapel_kelas AS mk 
                        RIGHT JOIN detail_siswa AS ds ON mk.id_kelas = ds.id_kelas
                        LEFT JOIN users AS u ON ds.user_id = u.id
                        LEFT JOIN kelas AS k ON mk.id_kelas = k.id
                        LEFT JOIN nilai_siswa AS ns ON ds.nisn = ns.nisn AND mk.id_mapel = ns.id_mapel_kelas
                        WHERE true $whereMapel $whereTingkat $whereKelas
                        GROUP BY mk.id_mapel ,ds.nisn "
            );
        }

        $results['data'] = $data;

        return response()->json($results);
    }

    public function initSiswa($mapel, $kelas, $tingkat, $sumatif = null)
    {

        try {
            if ($sumatif != -1) {
                $idKelas = Kelas::where('tingkat', $tingkat)->where('kelas', $kelas)->first()->id;
                $data = DetailSiswa::where('id_kelas', $idKelas)->get();
                for ($i = 0; $i < sizeof($data); $i++) {
                    NilaiSiswa::updateOrCreate(
                        [
                            'nisn' => $data[$i]->nisn,
                            'id_mapel_kelas' => $mapel,
                            'id_sumatif' => $sumatif
                        ],
                        [
                            'nisn' => $data[$i]->nisn,
                            'id_mapel_kelas' => $mapel,
                            'id_sumatif' => $sumatif
                        ]
                    );
                }
                return back()->with('success', 'Berhasil Initialize Data');
            } else {
                return back()->with('danger', 'Maaf Sumatif Anda Masih Belum Terisi');
            }
        } catch (QueryException $e) {
            return back()->with('danger', 'Maaf Sumatif Anda Masih Belum Terisi');
        }
    }

    public function updateNilai(Request $request)
    {
        try {
            $nilaiSiswa = NilaiSiswa::updateOrCreate(
                [
                    'nisn' => $request->nisn,
                    'id_mapel_kelas' => $request->id_mapel,
                    'id_sumatif' => $request->id_sumatif
                ],
                [
                    'nisn' => $request->nisn,
                    'id_mapel_kelas' => $request->id_mapel,
                    'nilai' => $request->nilai,
                    'id_sumatif' => $request->id_sumatif
                    // 'id_sumatif_tertinggi' => $request->highdesc,
                    // 'id_sumatif_terendah' => $request->lowdesc
                ]
            );

            $resultsSumatif = ResultsSumatif::updateOrCreate(
                [
                    'id_detail_siswa' => $request->nisn,
                    'id_mapel' => $request->id_mapel
                ],
                [
                    'nisn' => $request->nisn,
                    'id_mapel_kelas' => $request->id_mapel,
                    'alpha' => $request->alpha,
                    'ijin' => $request->ijin,
                    'sakit' => $request->sakit,
                    'id_sumatif_max' => $request->highdesc,
                    'id_sumatif_min' => $request->lowdesc
                ]
            );

            return response()->json(['success' => true, 'message' => 'Data berhasil diperbarui']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        }
    }

    public function getNilaiAkhir($mapel, $kelas, $tingkat)
    {
        $data = DB::SELECT(
            "SELECT 
                ds.nama_lengkap , 
                ds.nisn , 
                u.username AS nis ,
                k.kelas,
                k.tingkat,
                mk.id_mapel,
                mk.id_kelas,
                mp.nama_mapel,
                mp.semester,
                vhn.id_sumatif_terendah,
                vhn.id_sumatif_tertinggi,
                na.pas,
                na.pts,
                (na.pas + na.pts) / 2 as ratauji,
                (SELECT ROUND(AVG(nilai),2)
                FROM nilai_siswa 
                WHERE id_mapel_kelas = mk.id_mapel 
                AND nisn = ds.nisn 
                GROUP BY id_mapel_kelas , nisn
                ) AS ratasuma,
                (SELECT ROUND(((ROUND(AVG(nilai),0) + (COALESCE(na.pts,0) + COALESCE(na.pas,0))/2) / 2),0)
                FROM nilai_siswa 
                WHERE id_mapel_kelas = mk.id_mapel 
                AND nisn = ds.nisn 
                GROUP BY id_mapel_kelas , nisn
                ) AS nilai_akhir
            FROM mapel_kelas AS mk 
            LEFT JOIN detail_siswa AS ds ON mk.id_kelas = ds.id_kelas
            LEFT JOIN mata_pelajaran AS mp ON mk.id_mapel = mp.id
            LEFT JOIN users AS u ON ds.user_id = u.id
            LEFT JOIN kelas AS k ON ds.id_kelas = k.id 
            LEFT JOIN nilai_akhir AS na ON ds.nisn = na.nisn AND mk.id_mapel = na.id_mapel
            LEFT JOIN vw_hasil_nilai AS vhn ON ds.nisn = vhn.nisn AND mp.id = vhn.id_mapel_kelas AND mp.semester = vhn.semester AND mp.id_tahun_akademik = vhn.id_tahun_akademik
            WHERE ds.nama_lengkap IS NOT NULL AND mk.id_mapel = $mapel AND k.kelas = '$kelas' AND k.tingkat = '$tingkat'    
        "
        );

        return response()->json($data);
    }
    public function nilaiAKhir()
    {
        $id_user = Auth::user()->id;

        $data_mapel = DB::SELECT(
            "SELECT mp.* , dk.id_user , mp.semester
            FROM mata_pelajaran AS mp LEFT JOIN detail_karyawan AS dk ON mp.id_guru = dk.id
            WHERE mp.semester = (SELECT semester FROM informasi_sekolah) AND mp.id_tahun_akademik = (SELECT ta.id FROM tahun_akademik AS ta LEFT JOIN informasi_sekolah AS i ON ta.tahun_akademik = i.tahun_pelajaran) AND dk.id_user = $id_user"
        );

        return view('guru.inputUjianSiswaGuru', ['data_mapel' => $data_mapel]);
    }


    public function post_nilaiAkhir(Request $request)
    {
        try {
            NilaiAkhir::UpdateOrCreate(
                [
                    'nisn' => $request->nisn,
                    'id_mapel' => $request->id_mapel
                ],
                [
                    'nisn' => $request->nisn,
                    'id_mapel' => $request->id_mapel,
                    'pas' => $request->nilaiPas,
                    'pts' => $request->nilaiPts
                ]
            );
            return response()->json(['success' => true, 'message' => 'Data berhasil diperbarui']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        }
    }

    public function update_ekstrakulikuler(Request $request)
    {
        try {
            $attributes = [
                'nisn' => $request->nisn,
                'id_tahun_akademik' => $request->id_tahun_akademik,
                'semester' => $request->semester,
                'ekstrakulikuler1' => $request->ekstrakulikuler1,
                'nilai_ekstra1' => $request->nilai_ekstra1,
                'ekstrakulikuler2' => $request->ekstrakulikuler2,
                'nilai_ekstra2' => $request->nilai_ekstra2,
            ];

            if ($request->has('ekstrakulikuler3')) {
                $attributes['ekstrakulikuler3'] = $request->ekstrakulikuler3;
            }
            if ($request->has('nilai_ekstra3')) {
                $attributes['nilai_ekstra3'] = $request->nilai_ekstra3 ?? 0;
            }
            if ($request->has('ekstrakulikuler4')) {
                $attributes['ekstrakulikuler4'] = $request->ekstrakulikuler4;
            }
            if ($request->has('nilai_ekstra4')) {
                $attributes['nilai_ekstra4'] = $request->nilai_ekstra4 ?? 0;
            }
            if ($request->has('ekstrakulikuler5')) {
                $attributes['ekstrakulikuler5'] = $request->ekstrakulikuler5;
            }
            if ($request->has('nilai_ekstra5')) {
                $attributes['nilai_ekstra5'] = $request->nilai_ekstra5 ?? 0;
            }

            Ekstrakulikuler::updateOrCreate(
                ['nisn' => $request->nisn, 'id_tahun_akademik' => $request->id_tahun_akademik, 'semester' => $request->semester],
                $attributes
            );

            return response()->json(['success' => true, 'message' => 'Data berhasil diperbarui']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        }
    }

    public function getEkstrakulikuler($nisn)
    {
        $check = DB::SELECT("SELECT is_.* , ta.id AS id_tahun_akademik FROM informasi_sekolah AS is_ LEFT JOIN tahun_akademik AS ta ON is_.tahun_pelajaran = ta.tahun_akademik LIMIT 1");
        $data = Ekstrakulikuler::where('id_tahun_akademik', $check[0]->id_tahun_akademik)->where('semester', $check[0]->semester)->where('nisn', $nisn)->first();

        return response()->json($data);
    }

    public function nilaiKeseluruhanSiswa()
    {
        $auth = DetailSiswa::where('user_id', Auth::user()->id)->first();

        $tahunAkademik = TahunAkademik::all();

        return view('siswaOrangTua.nilaiKeseluruhanSiswaOrangTua', ['auth' => $auth, 'tahunAkademik' => $tahunAkademik]);
    }

    public function nilaiRaporSiswa($id_tahun_akademik, $semester)
    {
        $id = Auth::user()->id;

        $data_distinct = DB::SELECT(
            "SELECT 
                ds.nama_lengkap , 
                ds.nisn , 
                u.username AS nis ,
                k.kelas,
                k.tingkat,
                mk.id_kelas,
                mp.semester,
                mp.id_tahun_akademik
            FROM mapel_kelas AS mk 
            LEFT JOIN detail_siswa AS ds ON mk.id_kelas = ds.id_kelas
            LEFT JOIN mata_pelajaran AS mp ON mk.id_mapel = mp.id
            LEFT JOIN users AS u ON ds.user_id = u.id
            LEFT JOIN kelas AS k ON ds.id_kelas = k.id 
            LEFT JOIN vw_hasil_nilai AS vhn ON ds.nisn = vhn.nisn AND mp.id = vhn.id_mapel_kelas AND mp.semester = vhn.semester AND mp.id_tahun_akademik = vhn.id_tahun_akademik WHERE ds.nama_lengkap IS NOT NULL AND ds.user_id=$id GROUP BY ds.nisn , mp.semester , mp.id_tahun_akademik"
        );

        $data = DB::SELECT(
            "SELECT 
                    ds.nama_lengkap , 
                    ds.nisn , 
                    u.username AS nis ,
                    k.kelas,
                    k.tingkat,
                    mk.id_mapel,
                    mk.id_kelas,
                    mp.nama_mapel,
                    mp.semester,
                    vhn.id_sumatif_terendah,
                    vhn.id_sumatif_tertinggi,
                    s.low_deskripsi,
                    s1.high_deskripsi,
                    na.pas,
                    na.pts,
                    (SELECT ROUND(((ROUND(AVG(nilai),2) + COALESCE(na.pts,0) + COALESCE(na.pas,0)) / 3),2)
                    FROM nilai_siswa 
                    WHERE id_mapel_kelas = mk.id_mapel 
                    AND nisn = ds.nisn 
                    GROUP BY id_mapel_kelas , nisn
                    ) AS nilai_akhir
            FROM mapel_kelas AS mk 
            LEFT JOIN detail_siswa AS ds ON mk.id_kelas = ds.id_kelas
            LEFT JOIN mata_pelajaran AS mp ON mk.id_mapel = mp.id
            LEFT JOIN users AS u ON ds.user_id = u.id
            LEFT JOIN kelas AS k ON ds.id_kelas = k.id 
            LEFT JOIN nilai_akhir AS na ON ds.nisn = na.nisn AND mk.id_mapel = na.id_mapel
            LEFT JOIN vw_hasil_nilai AS vhn ON ds.nisn = vhn.nisn AND mp.id = vhn.id_mapel_kelas AND mp.semester = vhn.semester AND mp.id_tahun_akademik = vhn.id_tahun_akademik
            LEFT JOIN sumatif AS s ON vhn.id_sumatif_terendah = s.id
            LEFT JOIN sumatif AS s1 ON vhn.id_sumatif_tertinggi = s1.id
            WHERE ds.nama_lengkap IS NOT NULL AND ds.user_id = $id AND mp.semester = '$semester' AND mp.id_tahun_akademik = $id_tahun_akademik
        "
        );

        $detailsiswa = DB::SELECT("SELECT ds.* , u.username AS nis , k.tingkat , k.kelas  FROM detail_siswa AS ds LEFT JOIN users AS u ON ds.user_id = u.id LEFT JOIN kelas AS k ON ds.id_kelas = k.id WHERE ds.user_id = $id");

        return view('siswaOrangTua.nilaiRapor.nilaiRaporSiswaOrangTua', ['data' => $data, 'data_rapor' => $data_distinct, 'detail_siswa' => $detailsiswa[0]]);
    }

    public function getJsonRapor($nisn)
    {
        $data = DB::SELECT(
            "SELECT 
                    ds.nama_lengkap , 
                    ds.nisn , 
                    u.username AS nis ,
                    k.kelas,
                    k.tingkat,
                    mk.id_mapel,
                    mk.id_kelas,
                    mp.nama_mapel,
                    mp.semester,
                    vhn.id_sumatif_terendah,
                    vhn.id_sumatif_tertinggi,
                    s.low_deskripsi,
                    s1.high_deskripsi,
                    na.pas,
                    na.pts,
                    (SELECT ROUND(((ROUND(AVG(nilai),2) + COALESCE(na.pts,0) + COALESCE(na.pas,0)) / 3),2)
                    FROM nilai_siswa 
                    WHERE id_mapel_kelas = mk.id_mapel 
                    AND nisn = ds.nisn 
                    GROUP BY id_mapel_kelas , nisn
                    ) AS nilai_akhir
            FROM mapel_kelas AS mk 
            LEFT JOIN detail_siswa AS ds ON mk.id_kelas = ds.id_kelas
            LEFT JOIN mata_pelajaran AS mp ON mk.id_mapel = mp.id
            LEFT JOIN users AS u ON ds.user_id = u.id
            LEFT JOIN kelas AS k ON ds.id_kelas = k.id 
            LEFT JOIN nilai_akhir AS na ON ds.nisn = na.nisn AND mk.id_mapel = na.id_mapel
            LEFT JOIN vw_hasil_nilai AS vhn ON ds.nisn = vhn.nisn AND mp.id = vhn.id_mapel_kelas AND mp.semester = vhn.semester AND mp.id_tahun_akademik = vhn.id_tahun_akademik
            LEFT JOIN sumatif AS s ON vhn.id_sumatif_terendah = s.id
            LEFT JOIN sumatif AS s1 ON vhn.id_sumatif_tertinggi = s1.id
            WHERE ds.nama_lengkap IS NOT NULL AND ds.nisn = $nisn AND mp.semester = (SELECT semester FROM informasi_sekolah) AND mp.id_tahun_akademik = (SELECT ta.id FROM tahun_akademik AS ta LEFT JOIN informasi_sekolah AS is_ ON ta.tahun_akademik = is_.tahun_pelajaran)
        "
        );

        return response()->json($data);
    }

    public function insertUpdatePancasila(Request $request)
    {
        $step = $request->step;

        NilaiPancasila::updateOrCreate(
            [
                'nisn' => $request->nisn,
                'id_pancasila' => $request->id_pancasila,
                'step' => $request->step,
                'id_tahun_akademik' => $request->id_tahun_akademik,
                'semester' => $request->semester
            ],
            [
                'nisn' => $request->nisn,
                'id_pancasila' => $request->id_pancasila,
                'step' => $request->step,
                'id_tahun_akademik' => $request->id_tahun_akademik,
                'semester' => $request->semester,
                'desc_pancasila1' => $request->desc_pancasila1,
                'desc_pancasila2' => $request->desc_pancasila2,
                'desc_pancasila3' => $request->desc_pancasila3,
                'nilai_pancasila1' => $request->nilai_pancasila1,
                'nilai_pancasila2' => $request->nilai_pancasila2,
                'nilai_pancasila3' => $request->nilai_pancasila3,
            ]
        );

        NilaiPancasila::where([
            'nisn' => $request->nisn,
            'id_pancasila' => $request->id_pancasila,
            'id_tahun_akademik' => $request->id_tahun_akademik,
            'semester' => $request->semester
        ])->update([
            'catatan' => $request->catatan
        ]);


        return true;
    }

    public function get_nilai_pancasila($nisn, $semester, $id_tahun_akademik, $id_pancasila)
    {
        $data = DB::select(
            "SELECT * FROM nilai_pancasila WHERE nisn = $nisn AND semester = '$semester' AND id_tahun_akademik = $id_tahun_akademik  AND id_pancasila = $id_pancasila ORDER BY step ASC"
        );

        return response()->json($data);
    }

    public function importNilai(Request $request)
    {
        Excel::import(new importExcel($request->id_mapel, $request->tingkat, $request->kelas, $request->sumatif), $request->file('file')->store('files'));
        return redirect()->back()->with('success', 'Berhasil Upload Nilai');
    }

    public function unduhPancasila($nisn)
    {
        $nilaiPancasila1 = DB::SELECT(
            "SELECT 
                    np.* , 
                    p.nama_project , 
                    p.deskripsi , 
                    p.sub_proyek1 , 
                    p.sub_proyek2 , 
                    p.sub_proyek3 
            FROM nilai_pancasila AS np LEFT JOIN pancasila AS p ON np.id_pancasila = p.id
            WHERE id_tahun_akademik = (SELECT ta.id FROM tahun_akademik AS ta LEFT JOIN informasi_sekolah AS is_ ON ta.id = is_.tahun_pelajaran LIMIT 1) 
            AND semester = (SELECT semester FROM informasi_sekolah)
            AND p.is_active = 1
            AND step =1
            AND nisn = $nisn"
        );

        $nilaiPancasila2 = DB::SELECT(
            "SELECT 
                    np.* , 
                    p.nama_project , 
                    p.deskripsi , 
                    p.sub_proyek1 , 
                    p.sub_proyek2 , 
                    p.sub_proyek3 
            FROM nilai_pancasila AS np LEFT JOIN pancasila AS p ON np.id_pancasila = p.id
            WHERE id_tahun_akademik = (SELECT ta.id FROM tahun_akademik AS ta LEFT JOIN informasi_sekolah AS is_ ON ta.id = is_.tahun_pelajaran LIMIT 1) 
            AND semester = (SELECT semester FROM informasi_sekolah)
            AND p.is_active = 1
            AND step =2
            AND nisn = $nisn"
        );

        // dd($nilaiPancasila2[0]->nilai_pancasila1);

        $data_diri = DB::SELECT(
            "SELECT 
                ds.* , 
                k.kelas , 
                k.tingkat , 
                dk.nama_lengkap AS nama_wali_kelas,
                dk.username_user as nbm_wali_kelas,
                is_.tahun_pelajaran,
                is_.alamat_sekolah,
                is_.nama_sekolah,
                is_.nama_kepala,
                is_.nbm AS nbm_kepala,
                is_.fase,
                REPLACE(is_.tempat_tanggal_rapor, ' / ', ', ') AS tanggal
            FROM detail_siswa AS ds LEFT JOIN kelas AS k ON ds.id_kelas = k.id
            LEFT JOIN detail_karyawan AS dk ON k.id_wali_kelas = dk.id
            LEFT JOIN informasi_sekolah AS is_ ON TRUE
            WHERE nisn = $nisn"
        );

        $pancasila = DB::SELECT(
            "SELECT * FROM pancasila WHERE is_active =1"
        );

        $now = DB::SELECT(
            "SELECT CONCAT(DAY(CURRENT_DATE), ' ', MONTHNAME(CURRENT_DATE), ' ', YEAR(CURRENT_DATE)) AS date_now"
        );

        return view('rapor.pancasila', ['nilaiPancasila1' => $nilaiPancasila1, 'nilaiPancasila2' => $nilaiPancasila2, 'data_diri' => $data_diri[0], 'pancasila' => $pancasila, 'now' => $now]);
    }

    public function unduhRapor($nisn)
    {
        $data_diri = DB::SELECT(
            "SELECT 
                ds.* , 
                k.kelas , 
                k.tingkat , 
                dk.nama_lengkap AS nama_wali_kelas,
                dk.username_user as nbm_wali_kelas,
                is_.semester,
                is_.tahun_pelajaran,
                is_.alamat_sekolah,
                is_.nama_sekolah,
                is_.nama_kepala,
                is_.nbm AS nbm_kepala,
                is_.fase,
                REPLACE(is_.tempat_tanggal_rapor, ' / ', ', ') AS tanggal
            FROM detail_siswa AS ds LEFT JOIN kelas AS k ON ds.id_kelas = k.id
            LEFT JOIN detail_karyawan AS dk ON k.id_wali_kelas = dk.id
            LEFT JOIN informasi_sekolah AS is_ ON TRUE
            WHERE nisn = $nisn"
        );

        $data_nilai = DB::SELECT(
            "SELECT 
                    ds.nama_lengkap , 
                    ds.nisn , 
                    u.username AS nis ,
                    k.kelas,
                    k.tingkat,
                    mk.id_mapel,
                    mk.id_kelas,
                    mp.nama_mapel,
                    mp.semester,
                    vhn.id_sumatif_terendah,
                    vhn.id_sumatif_tertinggi,
                    s.low_deskripsi,
                    s1.high_deskripsi,
                    na.pas,
                    na.pts,
                    -- (SELECT ROUND(((ROUND(AVG(nilai),2) + COALESCE(na.pts,0) + COALESCE(na.pas,0)) / 3),2)
                    (SELECT ROUND(((ROUND(AVG(nilai),0) + (COALESCE(na.pts,0) + COALESCE(na.pas,0))/2) / 2),0)
                    FROM nilai_siswa 
                    WHERE id_mapel_kelas = mk.id_mapel 
                    AND nisn = ds.nisn 
                    GROUP BY id_mapel_kelas , nisn
                    ) AS nilai_akhir
            FROM mapel_kelas AS mk 
            LEFT JOIN detail_siswa AS ds ON mk.id_kelas = ds.id_kelas
            LEFT JOIN mata_pelajaran AS mp ON mk.id_mapel = mp.id
            LEFT JOIN users AS u ON ds.user_id = u.id
            LEFT JOIN kelas AS k ON ds.id_kelas = k.id 
            LEFT JOIN nilai_akhir AS na ON ds.nisn = na.nisn AND mk.id_mapel = na.id_mapel
            LEFT JOIN vw_hasil_nilai AS vhn ON ds.nisn = vhn.nisn AND mp.id = vhn.id_mapel_kelas AND mp.semester = vhn.semester AND mp.id_tahun_akademik = vhn.id_tahun_akademik
            LEFT JOIN sumatif AS s ON vhn.id_sumatif_terendah = s.id
            LEFT JOIN sumatif AS s1 ON vhn.id_sumatif_tertinggi = s1.id
            WHERE ds.nama_lengkap IS NOT NULL AND ds.nisn = $nisn AND mp.semester = (SELECT semester FROM informasi_sekolah) AND mp.id_tahun_akademik = (SELECT ta.id FROM tahun_akademik AS ta LEFT JOIN informasi_sekolah AS is_ ON ta.tahun_akademik = is_.tahun_pelajaran)
        "
        );

        $nilai_ekstra = DB::SELECT(
            "select * from ekstrakulikuler 
                WHERE id_tahun_akademik = (SELECT ta.id FROM tahun_akademik AS ta LEFT JOIN informasi_sekolah AS is_ ON ta.id = is_.tahun_pelajaran LIMIT 1) 
                AND semester = (SELECT semester FROM informasi_sekolah)
                AND nisn = $nisn"
        );


        $result = DB::SELECT(
            "SELECT * FROM results_sumatif WHERE id_detail_siswa = $nisn"
        );

        $now = DB::SELECT(
            "SELECT CONCAT(DAY(CURRENT_DATE), ' ', MONTHNAME(CURRENT_DATE), ' ', YEAR(CURRENT_DATE)) AS date_now"
        );
        return view('rapor.rapor', ['data_diri' => $data_diri[0], 'nilai' => $data_nilai, 'nilai_ekstra' => $nilai_ekstra, 'result' => $result, 'now' => $now]);
    }

    public function exportLeger(Request $request)
    {
        $auth = Auth::user()->id;
        return Excel::download(new ExportLeger($auth), 'leger.xlsx');
    }

    public function getExcelKelas(Request $request , $tingkat , $kelas)
    {
        // Ganti query sesuai kebutuhan Anda
        $data = DB::select("
            SELECT 
                u.username AS NIS, 
                ds.nisn AS NISN,
                ds.nama_lengkap AS `Nama Siswa`,
                NULL AS `Sumatif 1`,
                NULL AS `Sumatif 2`,
                NULL AS `Sumatif 3`,
                NULL AS `Sumatif 4`,
                NULL AS `Sumatif 5`,
                NULL AS `Sumatif 6`,
                NULL AS `Sumatif 7`,
                NULL AS `Sumatif 8`,
                NULL AS `Sumatif 9`,
                NULL AS `Sumatif 10`
            FROM detail_siswa AS ds 
            LEFT JOIN kelas AS k ON ds.id_kelas = k.id
            LEFT JOIN users AS u ON ds.user_id = u.id
            WHERE k.tingkat = $tingkat AND k.kelas = '$kelas'
        ");
    
        // Periksa apakah data ada sebelum diekspor
        if (empty($data)) {
            return response()->json(['message' => 'Tidak ada data untuk diekspor.']);
        }
    
        // Mulai membangun konten file Excel
        $content = '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>' .
                   '<Workbook xmlns="urn:schemas-microsoft-com:office:spreadsheet"' .
                   ' xmlns:x="urn:schemas-microsoft-com:office:excel"' .
                   ' xmlns:ss="urn:schemas-microsoft-com:office:spreadsheet"' .
                   ' xmlns:html="http://www.w3.org/TR/REC-html40">' .
                   '<Worksheet ss:Name="Sheet1">' .
                   '<Table>';
    
        // Tulis header
        $header = array_keys((array) $data[0]);
        $content .= '<Row>';
        foreach ($header as $column) {
            $content .= '<Cell><Data ss:Type="String">' . $column . '</Data></Cell>';
        }
        $content .= '</Row>';
    
        // Tulis data
        foreach ($data as $row) {
            $content .= '<Row>';
            foreach ((array) $row as $value) {
                $content .= '<Cell><Data ss:Type="String">' . $value . '</Data></Cell>';
            }
            $content .= '</Row>';
        }
    
        // Selesai membangun konten file Excel
        $content .= '</Table></Worksheet></Workbook>';
    
        // Berikan respons dengan konten dan header yang sesuai
        return Response::make($content, 200, [
            'Content-Type' => 'application/vnd.ms-excel',
            'Content-Disposition' => 'attachment; filename="data.xls"'
        ]);
    }
}
