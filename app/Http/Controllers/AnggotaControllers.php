<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class AnggotaControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('admin.dataKepalaSekolahGurudanKaryawan');
    }

    public function fetchstudent()
    {
        $anggotas = Anggota::all();
        return response()->json([
            'anggota'=>$anggotas,
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
        // return view('anggot.create');
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
        try {
            $anggota = $request->all();
            print_r($anggota);exit;

            $request->validate([
                'namaAnggota' => 'required',
                'jabatan' => 'required',
            ]);

            // $anggota = $request->post();

            $save = Anggota::create($anggota);
            return $this->responseCreate($save);
        } catch (\Exception $e) {
            return $this->responseCreate($e->getMessage(),true);
        }

        // $request->validate([
        //     'namaAnggota' => 'required',
        //     'nbm' => 'required',
        //     'email' => 'required',
        //     'role' => 'required',
        // ]);
        // Anggota::create($request->all());

        // return redirect()->route('anggot.index')->with('success','Data Berhasil Di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Anggota $anggot)
    {
        //
        return view('anggot.show', compact('anggot'));
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
        return view('anggot.edit', compact('anggot'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anggota $anggot)
    {
        //
        $request->validate([
            'namaAnggota' => 'required',
            'nbm' => 'required',
            'email' => 'required',
            'role' => 'required',
        ]);

        $anggot->update($request->all());

        return redirect()->route('anggot.index')->with('Success', 'Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anggota $anggot)
    {
        //
        $anggot->delete();

        return redirect()->route('anggot.index')->with('Success', 'Data Berhasil Dihapus');
    }
}