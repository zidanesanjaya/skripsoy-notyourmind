<?php

namespace App\Http\Controllers;

use App\Models\tahunAkademik;
use Illuminate\Http\Request;

class tahunAkademikControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tahunAkademik = tahunAkademik::all();
        return view ('tahunAkademik.index', compact('tahunAkademik'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tahunAkademik = tahunAkademik::all();
        return json_encode($tahunAkademik);
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
        tahunAkademik::create([
            'tahunAkademik' => $request->tahunAkademik
        ]);
        return 0;
        // return redirect()->route('tahunAkademik.index')->with('success', 'Tahun Akademik Berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tahunAkademik  $tahunAkademik
     * @return \Illuminate\Http\Response
     */
    public function show(tahunAkademik $tahunAkademik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tahunAkademik  $tahunAkademik
     * @return \Illuminate\Http\Response
     */
    public function edit(tahunAkademik $tahunAkademik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tahunAkademik  $tahunAkademik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tahunAkademik $tahunAkademik)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tahunAkademik  $tahunAkademik
     * @return \Illuminate\Http\Response
     */
    public function destroy(tahunAkademik $tahunAkademik)
    {
        //
        $tahunAkademik->delete();
        return redirect()->route('tahunAkademik.index')->with('success', 'Tahun Akademik Berhasil di Hapus');
    }
}
