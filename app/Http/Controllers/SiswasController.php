<?php

namespace App\Http\Controllers;

use App\Models\siswas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\DetailSiswa;
use Illuminate\Support\Facades\Hash;

class SiswasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswas = DB::SELECT(DB::RAW("
            select * from users left join detail_siswa on users.id = detail_siswa.user_id where users.role = 'siswa'
        "));

        return view('admin.masterSiswa', ['siswas'=>$siswas]);
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
        $user = User::create([
            'username' => $request->nis,
            'role' => 'siswa',
            // 'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        DetailSiswa::create([
            'nisn' => $request->nisn,
            'user_id' => $user->id,
            'nama_lengkap' => $request->nama
        ]);
        
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\siswas  $siswas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $siswas = Siswas::where('id',$id);
        
        // return response()->json([
        //     'data' => $siswas
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\siswas  $siswas
     * @return \Illuminate\Http\Response
     */
    public function edit(siswas $siswas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\siswas  $siswas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $checkDataSiswa = $request->dataSiswa;

        if(!isset($checkDataSiswa) || $checkDataSiswa == null){
            $userData = [
                'username' => $request->nis,
                'role' => 'siswa'
            ];
        
            $detailSiswaData = [
                'nisn' => $request->nisn,
                'nama_lengkap' => $request->nama
            ];
        
            if ($request->password !== null) {
                $userData['password'] = $request->password;
            }
        
            User::where('username', $request->nis)->update($userData);
        
            DetailSiswa::where('nisn', $request->nisn)->update($detailSiswaData);
        }else{
            $detailSiswaData = [
                'tempat' => $request->tempat,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'agama' => $request->agama,
                'status' => $request->status,
                'anak_ke' => $request->anak_ke,
                'alamat_siswa' => $request->alamat_siswa,
                'no_hp' => $request->no_hp,
                'sekolah_asal' => $request->sekolah_asal,
                'nama_ayah' => $request->nama_ayah,
                'pekerjaan_ayah' => $request->pekerjaan_ayah,
                'nama_ibu' => $request->nama_ibu,
                'pekerjaan_ibu' => $request->pekerjaan_ibu,
                'alamat_ortu' => $request->alamat_ortu,
                'no_hp_ortu' => $request->no_hp_ortu,
                'nama_wali' => $request->nama_wali,
                'alamat_wali' => $request->alamat_wali,
                'no_hp_wali' => $request->np_hp_wali,
                'pekerjaan_wali' => $request->pekerjaan_wali,
            ];

            DetailSiswa::where('nisn', $request->nisn)->update($detailSiswaData);
        }
    
        return back()->with('success', 'Berhasil Update Siswa');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\siswas  $siswas
     * @return \Illuminate\Http\Response
     */
    public function destroy(siswas $siswas)
    {
        $siswas->delete();

        return response()->json([
            'message' => 'siswas deleted'
        ], 204);
    }

    public function destroySiswa($id){
        User::findOrFail($id)->delete();
        DetailSiswa::where('user_id',$id)->delete();
        return back()->with('danger', 'Berhasil Menghapus Siswa');
    }

    public function getSiswaById($id){
        $data = DB::SELECT(DB::RAW(
            "SELECT u.* , ds.nama_lengkap , ds.nisn 
            from users AS u LEFT JOIN detail_siswa AS ds ON u.id = ds.user_id WHERE u.id = $id"
        ));

        return response()->json($data);
    }
    
}
