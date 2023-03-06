<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Izin;
class AbsensiController extends Controller
{
    public function KelolaDataKaryawan(){
        $karyawan = User::with('relasi_karyawan')->get();
        // dd($karyawan);
        return view ('AdminKelolaUser.tables-kelola-karyawan', ['karyawan' => $karyawan]);
        
    }

    public function DataAbsensiKaryawan() {
        return view ('AdminAbsen.data-absensi-karyawan');
    }

    public function DataPerizinan() {
        $data_izin = Izin::all();
        return view ('AdminIzin.data-perizinan-karyawan', ['data' => $data_izin]);
    }
}
