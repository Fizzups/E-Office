<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Karyawan;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login (Request $request)
    {
        return view ('AdminLogin.login');
    }

    public function loginproses (Request $request)
    {
        $cred = $request->validate(
            [
               'username'=>['required'],
               'password'=>['required'], 
            ]
        );
        if (Auth::attempt($cred))
        {
            $request->session()->regenerate();
            if(Auth::user()->role == 1){
                $id = Auth::user()->id;
                // dd($id);
            return redirect()->route('beranda-user',['id'=>$id]);
            }else if(Auth::user()->role == 2){
                $id = Auth::user()->id;
                // dd($id);
                return redirect()->route('beranda',['id'=>$id]);
            }
        }
        session()->flash('error','Invalid username or password');
        return redirect()->route('login');
    }

    public function logout ()
    {
        Auth::logout();

        return redirect('AdminLogin.login');
    }

    public function registeruser (Request $request)
    {
        return view('AdminLogin.registrasi');
    }

    public function registproses(Request $request){
        // dd($request->all());
        $user = new User();
        $user->nama = $request->nama;
        $user->role = 1;
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->save();
        // $user->remember_token = Str::random(60);
        $id_user = DB::getPdo()->lastInsertId();

        // $user = User::create([
        //     'nama' => $request->name,
        //     'role' => '1',
        //     'username' => $request->username,
        //     'password' => bcrypt($request->password),
        //     'remember_token' => Str::random(60),
        // ]);
        // dd($id_user);
        $karyawan = new Karyawan();
        $karyawan->users_id = $id_user;
        $karyawan->save();

        return redirect('/beranda');
    }
}
