<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Barang;
use App\Models\SuratMasuk;
use App\Models\SuratKeluar;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;


class AdminController extends Controller
{


    public function Beranda () {
        return view ('AdminIndex.beranda');
    }

    public function show($karyawan){
        // $karyawan = Karyawan::get();
        $result = Karyawan::findOrFail($karyawan);
        return view('show-detail',['karyawan'=> $result]);
    }

    public function edit($id) {
        $data = Karyawan::where('id',$id)->get();
        return view('AdminKelolaUser.tables-kelola-karyawan', ['karyawan' => $data]);
    }

    public function update(Request $request, $id) {
        $validateDataTbUsers = $request->validate([
            'nama'              => 'required|min:3|max:50',
        ]);
        
        $validateDataTbKaryawan = $request->validate([
            'nik'               => 'required|size:10',
            'gender'            => 'required|in:P,L',
            'shift'             => 'required|in:P,M',
            'jabatan'           => 'required',
            'divisi'            => 'required',
            'no_hp'             => 'required',
            'alamat'            => 'required',
            'mulai_kerja'       => 'required',
            'selesai_kerja'     => 'required',
            'gaji'              => 'required',
        ]);

        User::where('id', $id)->update($validateDataTbUsers);
        Karyawan::where('users_id', $id)->update($validateDataTbKaryawan);
        return redirect()->back();
    }

    public function delete($id){
        $deleteuser = User::find($id);
        $deleteuser->delete();
        return redirect()->back();

        
        // $deleteKaryawan = User::where('id', $id)->delete();
        // $deleteKaryawan = Karyawan::where('id', $id)->delete(); 
        // return redirect()->route('index.karyawan', ['delete' => $deleteKaryawan-> id]);

        // $item = Karyawan::findOrFail($id);
        // $data = Karyawan::where('id', $id)->delete();
        // return view('tables-kelola-karyawan', ['karyawan' => $data]);
        // return redirect()->route('index.karyawan');
        // return 'test';
    }

    //Debuggin Purposes
    public function test(){
        return 'test';
    }
}
