<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
// use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboardAdmin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login_admin'); // Ubah rute ini sesuai dengan rute yang diinginkan setelah logout
    }
    public function login_admin(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->role === 'admin') {
                session(['current_role' => 'admin']);
                return redirect()->intended('/dashboard')->with('success','Berhasil Login'); 
            }

            Auth::logout();
            return redirect()->back()->with('danger', 'Invalid role : Pastikan login sebagai admin');
        }

        return redirect()->back()->with('danger', 'Invalid username atau password');
    }
    public function login_user(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
           
            $stringData = $user->role;
            $myArray = explode(',', substr($stringData, 1, -1));
            if(in_array($request->role,$myArray)){
                session(['current_role' => $request->role]);

                return redirect()->intended('/dashboard')->with('success','Berhasil Login') ;
            }

            Auth::logout();
            return redirect()->back()->with('danger', 'Invalid role');
        }

        return redirect()->back()->with('danger', 'Invalid Username / Password ');
    }


    public function login_siswa(Request $request)
    {
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->role === 'siswa') {
                session(['current_role' => 'siswa']);
                return redirect()->intended('/dashboard')->with('success','Berhasil Login') ;
            }

            Auth::logout();
            return redirect()->back()->with('danger', 'Invalid Role : Akun anda dengan role '.$user->role.' tidak terdatar , pastikan login sebagai siswa');
        }

        return redirect()->back()->with('danger', 'Invalid username / password');
    }

}
