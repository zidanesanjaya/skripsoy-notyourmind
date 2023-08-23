<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TahunAkademik;
use App\Models\MataPelajaran;
use DB;
use Illuminate\Database\QueryException;


class MataPelajaranControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gurus = DB::table('detail_karyawan')->where('jabatan','guru')->get();
        $tahunAkademik = TahunAkademik::all();
        $mapels = DB::table('mata_pelajaran as mp')
                ->select('mp.id', 'mp.nama_mapel', 'mp.semester', 'dk.nama_lengkap', 'ta.tahun_akademik')
                ->leftJoin('detail_karyawan as dk', 'mp.id_guru', '=', 'dk.id')
                ->leftJoin('tahun_akademik as ta', 'mp.id_tahun_akademik', '=', 'ta.id')
                ->get();
        return view('admin.masterMataPelajaranAdmin',['guru'=>$gurus , 'tahunAkademik' => $tahunAkademik , 'mataPelajaran'=> $mapels]);
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
        try {
            MataPelajaran::create([
                'nama_mapel' => $request->nama_mapel,
                'id_guru' => $request->id_guru,
                'semester' => $request->semester,
                'id_tahun_akademik' => $request->id_tahun_akademik
            ]);
            
            return back()->with('success', 'Data berhasil ditambahkan.');
        } catch (QueryException $e) {
            return back()->with('danger', 'Terjadi masalah saat menyimpan data.');
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
    public function store_tahun_akademik(Request $request)
    {
        try {
            TahunAkademik::create([
                'tahun_akademik' => $request->tahun_akademik,
            ]);
    
            return response()->json(['message' => 'Data berhasil disimpan.']);
    
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500); // Kode status 500 untuk kesalahan server.
        }
    }

    public function index_tahun_akademik(){
        return response()->json(TahunAkademik::all());
    }

    public function destroy_tahun_akademik($id){
        TahunAkademik::find($id)->delete();
        return back()->with('danger','Data Berhasil Dihapus');;
    }
    public function destroy_mapel($id){
        MataPelajaran::find($id)->delete();
        return back()->with('danger','Data Berhasil Dihapus');
    }
    
}
