<?php

namespace App\Http\Controllers;

use App\Models\siswas;
use Illuminate\Http\Request;

class SiswasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswas = Siswas::paginate(10);
        return response()->json([
            'data' => $siswas
        ]);
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
        $siswas = Siswas::create([
            'nis' => $request->nis,
            'nisn' => $request->nisn,
            'namaSiswa' => $request->namaSiswa,
            'kelas' => $request->kelas,
            'fase' => $request->fase,
            'semester' => $request->semester,
            'tahunAkademik' => $request->tahunAkademik,
        ]);

        return response()->json([
            'data' => $siswas
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\siswas  $siswas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswas = Siswas::where('id',$id);
        
        return response()->json([
            'data' => $siswas
        ]);
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
    public function update(Request $request, siswas $siswas)
    {
        $siswas->nis = $request->nis;
        $siswas->nisn = $request->nisn;
        $siswas->namaSiswa = $request->namaSiswa;
        $siswas->kelas = $request->kelas;
        $siswas->fase = $request->fase;
        $siswas->semester = $request->semester;
        $siswas->tahunAkademik = $request->tahunAkademik;

        return response()->json([
            'data' => $siswas
        ]);
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
}
