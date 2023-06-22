<?php

namespace App\Http\Controllers;

use App\Charts\JkPerJurusanChart;
use App\Models\DataMaster;
use App\Models\DataTransaksi;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $jurusan = DataMaster::pluck('jurusan');
        $boys = [];
        $girls = [];
        foreach ($jurusan as $key => $prodi) {
            $boys[]  = DataTransaksi::join('data_mahasiswa', 'data_transaksi.nim', '=', 'data_mahasiswa.nim')->join('data_master', 'data_transaksi.kode_jurusan', '=', 'data_master.kode_jurusan')->where('data_mahasiswa.jenis_kelamin', 1)->where('data_master.jurusan', $prodi)->count();
            $girls[] = DataTransaksi::join('data_mahasiswa', 'data_transaksi.nim', '=', 'data_mahasiswa.nim')->join('data_master', 'data_transaksi.kode_jurusan', '=', 'data_master.kode_jurusan')->where('data_mahasiswa.jenis_kelamin', 0)->where('data_master.jurusan', $prodi)->count();
        };




        return view('index', compact('boys', 'girls', 'jurusan'));
    }
}
