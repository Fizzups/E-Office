<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratMasuk;
use App\Models\SuratKeluar;

class ArsipanController extends Controller
{
    // CRUD SURAT MASUK
    public function DataSuratMasuk() {
        $data_surat_masuk = SuratMasuk::all();
        return view ('AdminSurat.surat-masuk',['surat_masuk' => $data_surat_masuk]);
    }

        public function TambahDataSuratMasuk(Request $request, SuratMasuk $data_surat_masuk)
        {
            $validateData = $request->validate
            ([
                'tanggal_surat'        => 'required',
                'tanggal_masuk_surat'  => 'required',
                'nomor_surat'          => 'required|unique:surat_masuks,nomor_surat',
                'pengirim_surat'       => 'required',
                'perihal'              => 'required',
                'foto'                 => 'required',
                'dokumen'              => 'required',
            ]);

            $data_surat_masuk = SuratMasuk::create($request->all());
            if($request -> hasFile('foto')){
                $request-> file('foto')->move('assets/img/FileSuratMasuk/', $request->file('foto')->getClientOriginalName());
                $data_surat_masuk->foto = $request->file('foto')->getClientOriginalName();
                $data_surat_masuk->save();
            }
            if($request -> hasFile('dokumen')){
                $request-> file('dokumen')->move('assets/img/FileSuratMasuk/', $request->file('dokumen')->getClientOriginalName());
                $data_surat_masuk->dokumen = $request->file('dokumen')->getClientOriginalName();
                $data_surat_masuk->save();
            }
            return redirect('surat-masuk')->with('success','Data Berhasil di Tambahkan');
        }

        public function EditSuratMasuk($id){
            $data = SuratMasuk::where('id', $id)->get();
            return view('AdminSurat.surat-masuk', ['data' => $data]);
        }

        public function UpdateSuratMasuk(Request $request, $id){
            $validateData = $request->validate([
                'tanggal_surat'        => 'required',
                'tanggal_masuk_surat'  => 'required',
                'nomor_surat'          => 'required',
                'pengirim_surat'       => 'required',
                'perihal'              => 'required',
                'foto'                 => 'required',
                'dokumen'              => 'required',
            ]);
            SuratMasuk::where('id', $id)->update($validateData);
            return redirect()->back();
        }

        public function DeleteDataSuratMasuk($data_surat_masuk)
        {
            $data_surat_masuk = SuratMasuk::find($data_surat_masuk);
            $data_surat_masuk->delete();
            return redirect()->route('index.surat-masuk');
            return redirect('surat-masuk');
        }
    // End CRUD

    // CRUD SURAT KELUAR
    public function DataSuratKeluar() {
        $data_surat_keluar= SuratKeluar::all();
        return view ('AdminSurat.surat-keluar',['surat_keluar' => $data_surat_keluar]);
    }

        public function TambahDataSuratKeluar(Request $request, SuratKeluar $data_surat_keluar)
        {
            // dd($data_surat_keluar);
            $validateData = $request->validate
            ([
                'tanggal_surat'         => 'required',
                'tanggal_keluar_surat'  => 'required',
                'nomor_surat'           => 'required|unique:surat_keluars,nomor_surat',
                'tujuan_surat'          => 'required',
                'perihal'               => 'required',
                'foto'                  => 'required',
                'dokumen'               => 'required',
            ]);

            $data_surat_keluar = SuratKeluar::create($request->all());
            if($request -> hasFile('foto')){
                $request-> file('foto')->move('assets/img/FileSuratKeluar/', $request->file('foto')->getClientOriginalName());
                $data_surat_keluar->foto = $request->file('foto')->getClientOriginalName();
                $data_surat_keluar->save();
            }

            if($request -> hasFile('dokumen')){
                $request-> file('dokumen')->move('assets/img/FileSuratKeluar/', $request->file('dokumen')->getClientOriginalName());
                $data_surat_keluar->dokumen = $request->file('dokumen')->getClientOriginalName();
                $data_surat_keluar->save();
            }
            return redirect('surat-keluar')->with('success','Data Berhasil di Tambahkan');
        }

        public function EditSuratKeluar($id){
            $data = SuratMasuk::where('id', $id)->get();
            return view('AdminSurat.surat-masuk', ['data' => $data]);
        }

        public function UpdateSuratKeluar(Request $request, $id){
            $validateData = $request->validate([
                'tanggal_surat'        => 'required',
                'tanggal_masuk_surat'  => 'required',
                'nomor_surat'          => 'required',
                'pengirim_surat'       => 'required',
                'perihal'              => 'required',
                'foto'                 => 'required',
                'dokumen'              => 'required',
            ]);
            SuratMasuk::where('id', $id)->update($validateData);
            return redirect()->back();
        }

        public function DeleteDataSuratKeluar($data_surat_keluar)
        {
            $data_surat_keluar = SuratKeluar::find($data_surat_keluar);
            $data_surat_keluar->delete();
            return redirect()->route('index.surat-keluar');
            return redirect('surat-keluar');
        }
    // End CRUD
}
