<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\informasiSekolah;
use App\Models\TahunAkademik;
use App\Models\Pancasila;
use App\Models\User;
use App\Models\DetailKaryawan;
use App\Models\DetailSiswa;
use App\Models\MataPelajaran;
use Auth;
use DB;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->role == 'admin'){
            $count_guru = User::where('role','like', '%guru%')->count();
            $count_siswa = User::where('role', 'siswa')->count();
            $count_matpel = MataPelajaran::all()->count();
            return view('dashboard' , ['count_guru'=> $count_guru , 'count_siswa'=> $count_siswa , 'count_matpel'=> $count_matpel]);
        }
        if(Auth::user()->role == 'siswa'){
            $id = Auth::user()->id;
            $detailsiswa = DB::SELECT("SELECT ds.* , u.username AS nis , k.tingkat , k.kelas  FROM detail_siswa AS ds LEFT JOIN users AS u ON ds.user_id = u.id LEFT JOIN kelas AS k ON ds.id_kelas = k.id WHERE ds.user_id = $id");
            return view('dashboard' , ['detailsiswa'=> $detailsiswa[0]]);
        }
        return view('dashboard');

       
    }

    public function informasiSekolah(){
        $data = informasiSekolah::first();
        $tahun_akademik = TahunAkademik::all();
        $temp = explode(' / ', $data->tempat_tanggal_rapor);

        $tempat = $temp[0];
        $tanggal = $temp[1];
        return view('admin.updateInformasiAdmin' , ['data'=>$data , 'tahun_akademik'=>$tahun_akademik , 'tempat'=>$tempat , 'tanggal'=>$tanggal]);
    }

    public function detail_siswa(){
        $id = Auth::user()->id;

        $data = DB::SELECT(
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

        $pancasila = Pancasila::all()->where('is_active',1);
        $detailsiswa = DB::SELECT("SELECT ds.* , u.username AS nis , k.tingkat , k.kelas  FROM detail_siswa AS ds LEFT JOIN users AS u ON ds.user_id = u.id LEFT JOIN kelas AS k ON ds.id_kelas = k.id WHERE ds.user_id = $id");
        $informasi_sekolah = DB::SELECT("SELECT * FROM informasi_sekolah");
        return view('siswaOrangTua.nilaiRapor.keteranganDiriPesertaDidik',['data'=>$detailsiswa[0] , 'informasi_sekolah'=>$informasi_sekolah[0] , 'data_rapor'=> $data , 'pancasila'=> $pancasila]);
    }

    public function updateInformasiSekolah(Request $request){
        informasiSekolah::updateOrCreate(
            [
                'id' => $request->id
            ],
            [
                'nama_sekolah' => $request->nama_sekolah,
                'npsn' => $request->npsn,
                'nss' => $request->nss,
                'alamat_sekolah' => $request->alamat_sekolah,
                'kode_pos' => $request->kode_pos,
                'desa' => $request->desa,
                'kecamatan' => $request->kecamatan,
                'kabupaten' => $request->kabupaten,
                'provinsi' => $request->provinsi,
                'website' => $request->website,
                'email' => $request->email,
                'nama_kepala' => $request->nama_kepala,
                'nbm' => $request->nbm,
                'nip' => $request->nip,
                'semester' => $request->semester,
                'fase' => $request->fase,
                'tahun_pelajaran' => $request->tahun_pelajaran,
                'tempat_tanggal_rapor' => $request->tempat .' / '.$request->tanggal
            ]
        );

        return back()->with('success', 'Berhasil Update Data Sekolah');
    }

    public function updatePancasila(Request $request){
        Pancasila::updateOrCreate(
            [
                'id' => $request->id
            ],
            [
                'nama_project' => $request->nama_project,
                'deskripsi' => $request->deskripsi,
                'sub_proyek1' => $request->sub_proyek1,
                'sub_proyek2' => $request->sub_proyek2,
                'sub_proyek3' => $request->sub_proyek3
            ]
        );

        return back()->with('success', 'Berhasil Update Project Pancasila');
    }

    public function pancasila(){
        $pancasila = Pancasila::all()->where('is_active',1);
        return view('admin.kelolaProjekPancasilaAdmin' , compact('pancasila'));
    }
    public function destroyPancasila($id){
        $pancasila = Pancasila::findOrFail($id);
        $pancasila->update([
            'is_active' => 0
        ]);
        return back()->with('danger','Berhasil Menghapus Pancasila');
    }
    public function get_json_pancasila(){
        $pancasila = Pancasila::all()->where('is_active',1);
        return response()->json($pancasila);
    }
    public function my_profile(){
        $auth_id = Auth::user()->id;
        $auth = DB::SELECT(
            "SELECT 
            u.id , 
            u.username , 
            u.email , 
            u.role , 
            dk.nama_lengkap ,
            CONCAT(k.tingkat, k.kelas) AS kelas
        FROM users AS u 
        LEFT JOIN detail_karyawan AS dk ON u.id = dk.id_user 
        LEFT JOIN kelas AS k ON k.id_wali_kelas = dk.id
         WHERE u.id = $auth_id LIMIT 1"
        );
        return view('profile' , ['auth'=> $auth[0]]);
    }

    public function updateProfile(Request $request){
        $user = User::where('id', Auth::user()->id)->first();
        $array = [
            'password' => Hash::make($request->input('password'))
        ];
        if ($request->input('email') != null) {
            $array['email'] = $request->input('email');
        }
        if ($request->input('nama') != null) {
            $data_karyawan = DetailKaryawan::where('id_user',Auth::user()->id)->first();
            $data_karyawan->update([
                'nama_lengkap' => $request->input('nama')
            ]);
        }
        $user->update($array);
        
        return back()->with('success','Berhasil Update Profile');
    }

    public function postShowRapor($nisn , $is_show){
        DB::table('detail_siswa')->where('nisn',$nisn)->update(['is_show'=>$is_show]);
        return true;
    }
}
