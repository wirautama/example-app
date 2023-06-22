@extends('templates.template')
@section('content')

@section('title', 'Detail Data Transaksi')
<div class="container-fluid">
    <table class="table table-striped"> 
        <tr>
            <th width="20%">Kode Transaksi</th>
            <th width="1%">:</th>
            <td>{{$transaksi->kode_transaksi}}</td>
        </tr>
        <tr>
            <th width="20%">NIM</th>
            <th width="1%">:</th>
            <td>{{$transaksi->nim}}</td>
        </tr>
        <tr>
            <th width="20%">Nama Lengkap</th>
            <th width="1%">:</th>
            <td>{{$transaksi->nama}}</td>
        </tr>
        <tr>
            <th width="20%">Kode Jurusan</th>
            <th width="1%">:</th>
            <td>{{$transaksi->kode_jurusan}}</td>
        </tr>
        <tr>
            <th width="20%">Jurusan</th>
            <th width="1%">:</th>
            <td>{{$transaksi->jurusan}}</td>
        </tr>
        <tr>
            <th width="20%">Dibuat Pada</th>
            <th width="1%">:</th>
            <td>{{$transaksi->created_at}}</td>
        </tr>
        <tr>
            <th width="20%">Terakhir di Update Pada</th>
            <th width="1%">:</th>
            <td>{{$transaksi->updated_at}}</td>
        </tr>
    </table>
    <a href="/data-transaksi" class="btn btn-primary">Kembali</a>
</div>
@endsection