<?php

namespace App\Http\Controllers;

use App\Models\DataMahasiswa;
use App\Models\DataMaster;
use App\Models\DataTransaksi;
use Illuminate\Http\Request;

class DataTransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = DataTransaksi::all();

        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('transaksi.index', compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mahasiswa = DataMahasiswa::all();
        $master = DataMaster::all();
        return view('transaksi.create', compact('mahasiswa', 'master'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            // Data Diri
            'kode_transaksi' => 'required',
            'nim' => 'required',
            'nama' => 'required',
            'kode_jurusan' => 'required',
            'jurusan' => 'required',
        ]);

        DataTransaksi::create([
            'kode_transaksi' => $request->kode_transaksi,
            'nim' => $request->nim,
            'nama' => $request->nama,
            'kode_jurusan' => $request->kode_jurusan,
            'jurusan' => $request->jurusan,
        ]);
        return redirect()->route('data-transaksi.index')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaksi = DataTransaksi::find($id);
        return view('transaksi.show', compact('transaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaksi = DataTransaksi::find($id);
        $mahasiswa = DataMahasiswa::all();
        $master = DataMaster::all();
        return view('transaksi.edit', compact('transaksi', 'mahasiswa', 'master'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = [
            'kode_transaksi' => $request->kode_transaksi,
            'nim' => $request->nim,
            'nama' => $request->nama,
            'kode_jurusan' => $request->kode_jurusan,
            'jurusan' => $request->jurusan,
        ];
        DataTransaksi::where('id', $id)->update($update);
        return redirect()->route('data-transaksi.index')->with('success', 'Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaksi = DataTransaksi::destroy($id);
        if ($transaksi) {
            return redirect()->route('data-transaksi.index')->with(['success' => 'Data Berhasil Dihapus']);
        } else {
            return redirect()->route('data-transaksi.index')->with(['error' => 'Data Gagal Dihapus']);
        }
    }
}
