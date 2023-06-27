<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use Session;


class BarangController extends Controller
{
    public function index()
    {
        $data = Barang::all();
        return view('barang', compact('data'))->with('i');
    }

    public function simpan(Request $request)
    {
        $data =new Barang();
        $data->kd_barang = $request->input('kd_barang');
        $data->nama_barang = $request->input('nama_barang');
        $data->stok_awal = $request->input('stok_awal');
        $data->barang_masuk = $request->input('barang_masuk');
        $data->barang_keluar = $request->input('barang_keluar');
        $data->stok_akhir = $request->input('stok_akhir');
        $data->save();
        session::flash('sukses', 'Data berhasil dihapus');
        return back();
    }


    public function hapus($id)
    {
        $data = Barang::find($id);
        $data->delete();
        Session::flash('sukses', 'Data Berhasil Dihapus');
        return back();
    }

    public function update(Request $request, $id)
    {
        $data = Barang::find($id);
        $data->kd_barang = $request->kd_barang;
        $data->nama_barang = $request->nama_barang;
        $data->stok_awal = $request->stok_awal;
        $data->barang_masuk = $request->barang_masuk;
        $data->barang_keluar = $request->barang_keluar;
        $data->stok_akhir = $request->stok_akhir;
        $data->save();
        Session::flash('sukses', 'Data Berhasil Diupdate');
        return back();
    }
}