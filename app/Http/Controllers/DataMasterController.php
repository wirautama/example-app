<?php

namespace App\Http\Controllers;

use App\Models\DataMaster;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DataMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $master = DataMaster::all();
        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('master.index', compact('master'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('master.create');
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
            'kode_jurusan' => 'required',
            'jurusan' => 'required',
        ]);

        DataMaster::create([
            'kode_jurusan' => $request->kode_jurusan,
            'jurusan' => $request->jurusan,
        ]);
        return redirect()->route('data-master.index')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $master = DataMaster::find($id);
        return view('master.edit', compact('master'));
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
            'kode_jurusan' => $request->kode_jurusan,
            'jurusan' => $request->jurusan,
        ];
        DataMaster::where('id', $id)->update($update);
        return redirect()->route('data-master.index')->with('success', 'Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $master = DataMaster::destroy($id);
        if ($master) {
            return redirect()->route('data-master.index')->with(['success' => 'Data Berhasil Dihapus']);
        } else {
            return redirect()->route('data-master.index')->with(['error' => 'Data Gagal Dihapus']);
        }
    }
}
