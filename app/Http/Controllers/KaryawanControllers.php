<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\DetailKaryawan;
use Illuminate\Support\Facades\DB;


class KaryawanControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = DB::select("
        SELECT
		u.id , u.username, u.email, dk.nama_lengkap , u.role   
        FROM users as u
        LEFT JOIN detail_karyawan as dk ON u.id = dk.id_user WHERE role != 'admin' AND role != 'siswa' ;
        ");

        // echo json_encode($results);

        return view('admin.masterKepalaSekolahdanGuru' , ['results'=>$results]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $checkUser =  User::where('username',$request->nbm)->where('role',$request->role)->count();
        $stringData = "[" . implode(",", $request->role) . "]";

        if($checkUser == 0){
            $user = User::updateOrCreate(
            [
                'username' => $request->nbm,
            ],
            [
                'username' => $request->nbm,
                'role' => $stringData,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

            DetailKaryawan::updateOrCreate(
            [
                'username_user' => $request->nbm,
            ],    
            [
                'id_user' => $user->id,
                'username_user'=>$request->nbm,
                'nama_lengkap' => $request->nama_lengkap,
                'jabatan' => $stringData
            ]);

            return back()->with('success','Data Karyawan Telah Ditambahkan');
        }else{
            return back()->with('danger','Data Karyawan dengan nbm '.$request->nbm.' terdaftar sebagai '.$request->role);
        }

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

    public function getEmployee($id){
        $results = DB::select("
            SELECT
            u.id , u.username, u.email, dk.nama_lengkap , u.role   
            FROM
                    users as u
            LEFT JOIN detail_karyawan as dk ON u.id = dk.id_user WHERE role != 'admin' AND u.id = $id ;
        ");

        return response()->json($results[0]);
    }
    public function destroyUser($id){
        User::where('id',$id)->delete();
        DetailKaryawan::where('id_user',$id)->delete();

        return back()->with('success','Berhasil Hapus User');
    }
    public function index_all_employee(){
        $data = DB::SELECT(
            "SELECT 
                u.* , 
                dk.nama_lengkap ,
                mp.nama_mapel 
            FROM users AS u LEFT JOIN detail_karyawan AS dk ON u.id = dk.id_user
            LEFT JOIN mata_pelajaran AS mp ON dk.id = mp.id_guru WHERE u.role != 'admin' AND u.role != 'siswa' AND u.role NOT LIKE '%kepala_sekolah%'"
        );

        return view('kepalaSekolah.dataGuruKepalaSekolah', compact('data'));
    }

    public function index_nilai_siswa(Request $request){

        $tingkat = -1;
        $kelas = -1;

        $tingkat = $request->tingkat;
        $kelas = $request->kelas;

        $whereKelas = '';
        $whereTingkat = '';
        if($tingkat AND $tingkat != -1){
            $whereTingkat = "AND k.tingkat = $tingkat";
        }
        if($kelas AND $kelas != -1){
            $whereKelas = "AND k.kelas = '$kelas'";
        }
        $data = DB::SELECT(
            "SELECT ds.*, u.username AS nis, k.kelas, k.tingkat, 
            isk.semester, isk.tahun_pelajaran AS tahun_akademik 
            FROM detail_siswa ds 
            LEFT JOIN users u ON ds.user_id = u.id 
            LEFT JOIN kelas k ON ds.id_kelas = k.id 
            LEFT JOIN informasi_sekolah isk ON TRUE WHERE TRUE $whereTingkat $whereKelas;
     "
        );


        $informasi_sekolah = DB::SELECT("SELECT isk.semester ,isk.fase, ta.id AS tahun_akademik FROM informasi_sekolah AS isk LEFT JOIN tahun_akademik AS ta ON isk.tahun_pelajaran = ta.tahun_akademik");
        return view('kepalaSekolah.dataNilaiSiswaKepalaSekolah.dataNilaiSiswaKepalaSekolah',['data'=>$data , 'informasi_sekolah'=> $informasi_sekolah[0] , 'tingkat'=> $tingkat , 'kelas'=> $kelas]);
    }

    public function nilai_siswa_detail($nisn){
        $informasi_sekolah = DB::SELECT("SELECT isk.semester ,isk.fase, ta.id AS tahun_akademik FROM informasi_sekolah AS isk LEFT JOIN tahun_akademik AS ta ON isk.tahun_pelajaran = ta.tahun_akademik");
        return view('kepalaSekolah.dataNilaiSiswaKepalaSekolah.nilaiKeseluruhanSiswaKepalaSekolah',['nisn'=> $nisn , 'informasi_sekolah'=> $informasi_sekolah[0]]);
    }
}
