<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KaryawanController extends Controller
{
     // Role Karyawan
    public function TampilanUser ($id) {
        $karyawan = Karyawan::find($id);
        $user = User::find($id);
        return view ('KaryawanIndex.beranda-user',['karyawan'=>$karyawan,'user'=>$user]);
    }

    public function AkunUser (Request $request) {
        $karyawan = Karyawan::find($request->id);
        $user = User::find($request->id);
        return view ('KaryawanIndex.account-mobile',['karyawan'=>$karyawan, 'user'=>$user]);
    }

    public function FormPerizinan () {
        return view ('AdminIzin.form-perizinan-mobile');
    }

    public function updateAccount(Request $request){
        // dd($request->all());    
        $validated_data = $request->validate([
            'nama' => 'required',
            'username' => 'required',
        ]);
        $validated_data_karyawan = $request->validate([
            'alamat' => 'required',
        ]);

        User::where('id',Auth::user()->id)->update($validated_data);
        Karyawan::where('id',Auth::user()->id)->update($validated_data_karyawan);

        return redirect()->route('accountUser',['id'=>Auth::user()->id]);
    }

    public function BerandaAbsensiUser ($id) {
        $person = Karyawan::find($id);
        $shift = $person->shift;
        if($shift == 'M'){
        $currentTime = date('H:i:s');
            // $currentTime = "07:00";
        if($currentTime > "14:05"){
            $datang = "\assets\img\bg-kehadiran-disabled.png";
        }else if($currentTime > '13:59'){
            $datang = "\assets\img\bg-kehadiran.png";
        }else{
            $datang = "\assets\img\bg-kehadiran-disabled.png";
        }
        }else if($shift == 'P'){
            $currentTime = date('H:i:s');
            // $currentTime = "07:00";
            if($currentTime > "07:05"){
                $datang = "\assets\img\bg-kehadiran-disabled.png";
            }else if($currentTime > '06:59'){
                $datang = "\assets\img\bg-kehadiran.png";
            }else{
                $datang = "\assets\img\bg-kehadiran-disabled.png";
            }
        }
        
        return view ('KaryawanAbsen.beranda-absensi',['datang' => $datang]);
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
// End Role Karyawan

    public function show($karyawan) {
        $result = Karyawan::findOrFail($karyawan);
    }
}
