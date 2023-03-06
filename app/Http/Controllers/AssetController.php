<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class AssetController extends Controller
{
    // Data Barang
    public function KelolaDataBarang() {
        $data_barang = Barang::all();
        return view ('AdminBarang.tables-data-barang', ['barang' => $data_barang]);
    }

    // CRUD
        public function TambahDataBarang(Request $request, Barang $data_barang)
        {
            $validateData = $request->validate
            ([
                'nama_barang'       => 'required',
                'satuan_barang'     => 'required',
                'jumlah_barang'     => 'required',
            ]);

            Barang::create($validateData);
            return redirect('data-barang');
        }

        public function EditDataBarang($id){
            $data = Barang::where('id', $id)->get();
            return view('AdminBarang.tables-data-barang', ['barang' => $data]);
        }

        public function UpdateDataBarang(Request $request, $id){
            $validateData = $request->validate([
                'nama_barang' => '',
                'satuan_barang' => '',
                'jumlah_barang' => '',
            ]);
            Barang::where('id',$id)->update($validateData);
            return redirect()->back();
            // dd($id);
        }

        public function DeleteDataBarang($data_barang)
        {
            $data_barang = Barang::find($data_barang);
            $data_barang->delete();
            return redirect()->route('index.barang')->with('pesan',"Hapus data $data_barang->nama_barang berhasil");
            return redirect('data_barang')->with('success','Data berhasil ditambah!');
        }
    // End CRUD

// End Data Barang
}
