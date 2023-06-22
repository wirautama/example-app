@extends('templates.template')
@section('content')

@section('title', 'Detail Data Mahasiswa')

<div class="container-fluid">
    <table class="table table-striped"> 
        <tr>
            <th width="20%">NIM</th>
            <th width="1%">:</th>
            <td>{{$mahasiswa->nim}}</td>
        </tr>
        <tr>
            <th width="20%">Nama Lengkap</th>
            <th width="1%">:</th>
            <td>{{$mahasiswa->nama}}</td>
        </tr>
        <tr>
            <th width="20%">Jenis Kelamin</th>
            <th width="1%">:</th>
            <td>{{$mahasiswa->jenis_kelamin == true ? 'Laki-laki' : 'Perempuan'}}</td>
        </tr>
        <tr>
            <th width="20%">Tanggal Lahir</th>
            <th width="1%">:</th>
            <td>{{$mahasiswa->tanggal_lahir}}</td>
        </tr>
        <tr>
            <th width="20%">Alamat</th>
            <th width="1%">:</th>
            <td>{{$mahasiswa->alamat}}</td>
        </tr>
        <tr>
            <th width="20%">Dibuat Pada</th>
            <th width="1%">:</th>
            <td>{{$mahasiswa->created_at}}</td>
        </tr>
        <tr>
            <th width="20%">Terakhir di Update Pada</th>
            <th width="1%">:</th>
            <td>{{$mahasiswa->updated_at}}</td>
        </tr>
    </table>
    <a href="/data-mahasiswa" class="btn btn-primary">Kembali</a>
</div>

@endsection