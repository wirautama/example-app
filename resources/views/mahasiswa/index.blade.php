@extends('templates.template')
@section('content')

@section('title', 'Data Mahasiswa')
<table id="example1" class="table table-bordered table-striped">
    <thead>
    <tr>
      <th>No.</th>
      <th>NIM</th>
      <th>Nama</th>
      <th>Jenis Kelamin</th>
      <th>Tanggal Lahir</th>
      <th>Alamat</th>
      <th>Aksi</th>
    </tr>
    </thead>
        <?php $no =1 ?>
        @foreach($mahasiswa as $item)
    <tbody>
    <tr>
        <td>{{ $no++ }}</td>
        <td>{{ $item->nim }}</td>
        <td>{{ $item->nama }}</td>
        <td>{{ $item->jenis_kelamin == true ? 'Laki-laki' : 'Perempuan' }}</td>
        <td>{{ $item->tanggal_lahir }}</td>
        <td>{{ $item->alamat }}</td>
        <td><div class="btn-group pull-right">
            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
            <span class="caret"></span>
            </button>
            <ul class="dropdown-menu pull-right" role="menu">
            <li>
                <a href="{{route('data-mahasiswa.show', $item->id)}}"><i class="glyphicon glyphicon-sunglasses"></i> Detail</a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="{{route('data-mahasiswa.edit', $item->id)}}"><i class="glyphicon glyphicon-edit"></i> Ubah</a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="{{route('data-mahasiswa.destroy', $item->id)}}" data-confirm-delete="true">
                <i class="glyphicon glyphicon-trash"></i> Hapus
                </a>
            </li>
            </ul>
        </div>
        </td>
    </tr>
    </tbody>
    @endforeach
</table>
<a href="{{route('data-mahasiswa.create')}}" class=" btn btn-success">Tambah Data</a>
@endsection