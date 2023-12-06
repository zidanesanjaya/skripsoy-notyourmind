<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\DetailKaryawan;
use App\Models\DetailSiswa;
use App\Models\TahunAkademik;
use App\Models\User;
use App\Models\MapelKelas;
use App\Models\Pancasila;
use App\Models\InformasiSekolah;
use DB;
use Auth;

class KelasControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = DB::SELECT(
            "SELECT k.* , dk.nama_lengkap , dk.id_user , dk.jabatan FROM kelas AS k LEFT JOIN detail_karyawan AS dk ON k.id_wali_kelas = dk.id"
        );
        
        $data_mapel = DB::SELECT(
            "SELECT mp.* , dk.nama_lengkap FROM mata_pelajaran AS mp LEFT JOIN detail_karyawan AS dk ON mp.id_guru = dk.id 
            WHERE semester = (SELECT semester FROM informasi_sekolah) AND 
            id_tahun_akademik = (SELECT ta.id FROm tahun_akademik AS ta LEFT JOIN informasi_sekolah AS is_ ON ta.tahun_akademik = is_.tahun_pelajaran)"
        );

        $wali_kelas = DB::table('detail_karyawan')
        ->where('jabatan', 'like', '%guru%')
        ->where(function($query) {
            $query->where('jabatan', 'like' , '%kepala_sekolah%')
                  ->orWhere('jabatan', 'NOT LIKE', '%wali_kelas%');
        })
        ->get();
        
        return view('admin.kelolaKelasAdmin', compact('data','wali_kelas','data_mapel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Kelas::create([
            'tingkat' => $request->kelas,
            'kelas' => $request->kelas_name,
        ]);

        return back()->with('success','Kelas Berhasil Ditambahkan');
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
        $data = Kelas::where('id',$request->id_kelas)->first();
        $wali_kelas = DetailKaryawan::where('username_user', $request->wali_kelas)->first();
        $jabatan_old = $wali_kelas->jabatan;
        $jabatan_old = explode(',', substr($jabatan_old, 1, -1));

        array_push($jabatan_old,'wali_kelas');
        $stringData = "[" . implode(",", $jabatan_old) . "]";

        $data->update([
            'id_wali_kelas' => $wali_kelas->id
        ]);
        $wali_kelas->update([
            'jabatan' => $stringData
        ]);
        User::where('id',$wali_kelas->id_user)->first()->update([
            'role' => $stringData
        ]);

        return back()->with('success','Berhasil Update Kelas');
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

    public function data_kelas(){
        $auth = Auth::user()->id;
        $data = DB::SELECT(
            "SELECT ds.* , u.username AS nis , k.tingkat, k.kelas , dk.nama_lengkap AS nama_wali_kelas , dk.id_user AS id_user_wali
            FROM detail_siswa AS ds LEFT JOIN kelas AS k ON ds.id_kelas = k.id 
            LEFT JOIN detail_karyawan AS dk ON k.id_wali_kelas = dk.id
						LEFT JOIN users AS u ON ds.user_id = u.id WHERE dk.id_user = $auth"
        );

        $data_wali = DB::SELECT(
            "SELECT k.* , dk.nama_lengkap , dk.id_user
            FROM kelas AS k LEFT JOIN detail_karyawan AS dk ON k.id_wali_kelas = dk.id
            LEFT JOIN users AS u ON dk.id_user = u.id WHERE dk.id_user = $auth"
        );
        $data_wali = reset($data_wali);

        $siswa = DB::SELECT("SELECT u.* , ds.nisn , ds.nama_lengkap FROM users AS u LEFT JOIN detail_siswa AS ds ON u.id = ds.user_id WHERE u.role = 'siswa' AND ds.id_kelas IS NULL");

        return view('waliKelas.dataSiswaWaliKelas',compact('data','data_wali','siswa'));
    }

    public function data_nilai_siswa(){
        $auth = Auth::user()->id;
        $getSemester = InformasiSekolah::first()->semester;
        $getTahunAkademik = InformasiSekolah::first()->tahun_pelajaran;
        $getTahunAkademik_ = TahunAkademik::where('tahun_akademik',$getTahunAkademik)->first()->id;
        $pancasila = Pancasila::all()->where('is_active',1);
        $informasi_sekolah = InformasiSekolah::first();

    
        $data_siswa = DB::SELECT(
            "SELECT 
                :semester AS tahun_ajaran,
                :tahun_akademik AS semester,
                ds.* ,
                k.kelas,
                k.tingkat,
                dk.id_user AS id_user_karyawan,
                u.username AS nis
            FROM detail_siswa AS ds 
            LEFT JOIN kelas AS k ON ds.id_kelas = k.id
            LEFT JOIN detail_karyawan AS dk ON k.id_wali_kelas = dk.id
            LEFT JOIN users AS u ON ds.user_id = u.id
            WHERE dk.id_user = :auth", 
            [
                'semester' => $getSemester,
                'tahun_akademik' => $getTahunAkademik,
                'auth' => $auth
            ]
        );

        return view('waliKelas.nilaiKelas', ['data_siswa'=>$data_siswa,'getSemester'=> $getSemester,'getTahunAkademik'=> $getTahunAkademik_ , 'pancasila'=> $pancasila , 'informasi_sekolah'=> $informasi_sekolah] );
    }

    public function data_pancasila(){
        $auth = Auth::user()->id;

        $nisn = DB::SELECT("SELECT ds.nisn FROM users AS u LEFT JOIN detail_siswa AS ds ON u.id = ds.user_id WHERE u.id = $auth");
        $getSemester = InformasiSekolah::first()->semester;
        $getTahunAkademik = InformasiSekolah::first()->tahun_pelajaran;
        $getTahunAkademik_ = TahunAkademik::where('tahun_akademik',$getTahunAkademik)->first()->id;
        $pancasila = Pancasila::all()->where('is_active',1);
    
        $data_siswa = DB::SELECT(
            "SELECT 
                :semester AS tahun_ajaran,
                :tahun_akademik AS semester,
                ds.* ,
                k.kelas,
                k.tingkat,
                dk.id_user AS id_user_karyawan,
                u.username AS nis
            FROM detail_siswa AS ds 
            LEFT JOIN kelas AS k ON ds.id_kelas = k.id
            LEFT JOIN detail_karyawan AS dk ON k.id_wali_kelas = dk.id
            LEFT JOIN users AS u ON ds.user_id = u.id
            WHERE dk.id_user = :auth", 
            [
                'semester' => $getSemester,
                'tahun_akademik' => $getTahunAkademik,
                'auth' => $auth
            ]
        );

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
            LEFT JOIN vw_hasil_nilai AS vhn ON ds.nisn = vhn.nisn AND mp.id = vhn.id_mapel_kelas AND mp.semester = vhn.semester AND mp.id_tahun_akademik = vhn.id_tahun_akademik WHERE ds.nama_lengkap IS NOT NULL AND ds.user_id=$auth GROUP BY ds.nisn , mp.semester , mp.id_tahun_akademik"
        );

        $detailsiswa = DB::SELECT("SELECT ds.* , u.username AS nis , k.tingkat , k.kelas  FROM detail_siswa AS ds LEFT JOIN users AS u ON ds.user_id = u.id LEFT JOIN kelas AS k ON ds.id_kelas = k.id WHERE ds.user_id = $auth");

        return view('siswaOrangTua.nilaiRapor.nilaiPancasilaSiswaOrangTua', ['data_siswa'=>$data_siswa,'data_rapor'=> $data_distinct,'getSemester'=> $getSemester,'getTahunAkademik'=> $getTahunAkademik_ , 'pancasila'=> $pancasila , 'nisn'=> $nisn[0]->nisn , 'detail_siswa'=>$detailsiswa[0]]);
    }
   

    public function updateSiswaKelas(Request $request){
        $siswa = $request->siswa;
        $id_kelas = $request->id_kelas;

        for ($i=0; $i <sizeof($siswa) ; $i++) { 
            $data = DetailSiswa::where('nisn',$siswa[$i])->first();
            $data->update([
                'id_kelas'=> $id_kelas
            ]);
        }

        return back()->with('success','Data Siswa Telah Ditambahkan Ke Kelas');
    }

    public function deleteSiswaKelas(Request $request){
        $nisn = $request->nisn;
        $data = DetailSiswa::where('nisn',$nisn)->first();
        $data->update([
            'id_kelas'=> null
        ]);

        return back()->with('success','Berhasil Mengeluarkan Siswa Dari Kelas Anda');
    }

    public function updateMapel(Request $request){

        for ($i=0; $i <sizeOf($request->id_mapel) ; $i++) { 
            $check = MapelKelas::where('id_mapel',$request->id_mapel[$i])->where('id_kelas',$request->id_kelas_update)->first();
            if(empty($check)){
                MapelKelas::create([
                    'id_mapel' => $request->id_mapel[$i],
                    'id_kelas' => $request->id_kelas_update
                ]);
            }
        }
        return back()->with('success','Berhasil Tambah Kelas');
    }

    public function getKelasExists($id){
        $data = DB::SELECT(
            "SELECT mk.id_kelas,mk.id_mapel , mp.nama_mapel , dk.nama_lengkap 
            FROM mapel_kelas AS mk LEFT JOIN mata_pelajaran AS mp ON mk.id_mapel = mp.id 
            LEFT JOIN detail_karyawan AS dk ON mp.id_guru = dk.id WHERE mk.id_kelas = $id
            "
        );

        return response()->json($data);
    }

    public function get_json_nilai($nisn , $idTa , $semester){
        $data_nilai_siswa = DB::select(
            "SELECT 
                ns.id,
                ns.nisn,
                ns.id_sumatif,
                ns.id_mapel_kelas,
                ns.nilai,
                ds.id_kelas,
                k.id_wali_kelas,
                dk.id_user AS id_user_walikelas,
                mp.nama_mapel,
                s.sumatif,
                s.nama_sumatif,
                mp.id_tahun_akademik,
                mp.semester,
                ta.tahun_akademik,
                ta.active AS tahun_akademik_active
            FROM nilai_siswa as ns 
            LEFT JOIN mata_pelajaran AS mp ON ns.id_mapel_kelas = mp.id
            LEFT JOIN sumatif AS s ON ns.id_sumatif = s.id 
            LEFT JOIN tahun_akademik AS ta ON mp.id_tahun_akademik = ta.id
            LEFT JOIN detail_siswa AS ds ON ns.nisn = ds.nisn
            LEFT JOIN kelas AS k ON ds.id_kelas = k.id
            LEFT JOIN detail_karyawan AS dk ON k.id_wali_kelas = dk.id
            WHERE ta.active = 1 AND ns.nisn = $nisn AND ta.id = $idTa AND mp.semester = '$semester'
            ORDER BY id_mapel_kelas, sumatif ASC"
        );

        $distinct = DB::SELECT(
            "SELECT 
                ns.nisn,
                ns.id_mapel_kelas,
                ds.id_kelas,
                k.id_wali_kelas,
                dk.id_user AS id_user_walikelas,
                mp.nama_mapel,
                mp.id_tahun_akademik,
                mp.semester,
                ta.tahun_akademik,
                ta.active AS tahun_akademik_active,
                na.pas ,
                na.pts
            FROM nilai_siswa as ns 
            LEFT JOIN mata_pelajaran AS mp ON ns.id_mapel_kelas = mp.id
            LEFT JOIN tahun_akademik AS ta ON mp.id_tahun_akademik = ta.id
            LEFT JOIN detail_siswa AS ds ON ns.nisn = ds.nisn
            LEFT JOIN kelas AS k ON ds.id_kelas = k.id
            LEFT JOIN detail_karyawan AS dk ON k.id_wali_kelas = dk.id
            LEFT JOIN nilai_akhir AS na ON ns.nisn = na.nisn AND mp.id = na.id_mapel
            WHERE ta.active = 1 AND ns.nisn = $nisn AND ta.id = $idTa AND mp.semester = '$semester'
            GROUP BY ns.id_mapel_kelas , ns.nisn , na.pas , na.pts
            ORDER BY id_mapel_kelas ASC"
        );
         
        $data_diri = DB::SELECT(
            "SELECT * , kelas.tingkat , kelas.kelas FROM detail_siswa LEFT JOIN kelas ON detail_siswa.id_kelas = kelas.id WHERE nisn =$nisn"
        );
        $informasi_sekolah = DB::SELECT(
            "SELECT tahun_pelajaran , alamat_sekolah , semester , tahun_pelajaran FROM informasi_sekolah"
        );
    
        $results['informasi_sekolah'] = $informasi_sekolah;
        $results['data_diri'] = $data_diri;
        $results['dataNilai'] = $data_nilai_siswa;
        $results['distinctData'] = $distinct;
    
        return response()->json($results);
    }

    public function leger_nilai(){
        $auth = Auth::user()->id;

        $data = DB::SELECT(
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
            WHERE dk.id_user = $auth AND ta.tahun_akademik = (SELECT tahun_pelajaran FROM informasi_sekolah LIMIT 1) AND mp.semester = (SELECT semester FROM informasi_sekolah LIMIT 1)
            GROUP BY dk.id_user , ns.nisn , mp.semester , mp.id_tahun_akademik
            ORDER BY MAX(rn.avg_nilai) DESC
            "
        );

        return view('waliKelas.legerNilai' , ['data'=> $data]);

    }

    public function getNilaiDetail($nisn){
        $data = DB::SELECT(
            "SELECT 
                ns.nisn , 
                ROUND((SUM(ns.nilai) / COUNT(ns.nilai)),2) AS avg,
                ns.id_mapel_kelas AS id_mapel,
                ta.id AS id_tahun_akademik,
                mp.nama_mapel,
                ta.tahun_akademik,
                mp.semester
            FROM nilai_siswa AS ns 
            LEFT JOIN mata_pelajaran AS mp ON ns.id_mapel_kelas = mp.id 
            LEFT JOIN tahun_akademik AS ta ON mp.id_tahun_akademik = ta.id
            WHERE ta.tahun_akademik = (SELECT tahun_pelajaran FROM informasi_sekolah LIMIT 1) 
            AND mp.semester = (SELECT semester FROM informasi_sekolah LIMIT 1) AND ns.nisn = $nisn
            GROUP BY ns.nisn , ns.id_mapel_kelas , mp.id_tahun_akademik , mp.semester
            "
        );
        return response()->json($data);
    }

    public function deleteKelas($id){
        $checkData = DB::table('kelas')->where('id',$id)->first();
        $checkDataKelas = DB::table('detail_siswa')->where('id_kelas',$id)->first();

        if($checkDataKelas){
            return back()->with('danger','Gagal Hapus Kelas Karena Kelas sudah tertaut dengan siswa');
        }
        
        if($checkData->id_wali_kelas){
            return back()->with('danger','Gagal Hapus Kelas Karena sudah set wali kelas');
        }else{
            $data = DB::table('kelas')->where('id',$id)->delete();
            return back()->with('success','Berhasil Hapus Data');
        }

        
    }

    

    
}
