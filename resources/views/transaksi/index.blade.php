@extends('templates.template')
@section('content')

@section('title', 'Data Transaksi')
<table id="example1" class="table table-bordered table-striped">
    <thead>
    <tr>
      <th>No.</th>
      <th>Kode Transaksi</th>
      <th>NIM</th>
      <th>Nama</th>
      <th>Kode Jurusan</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>
    </thead>
        <?php $no =1 ?>
        @foreach($transaksi as $item)
    <tbody>
    <tr>
        <td>{{ $no++ }}</td>
        <td>{{ $item->kode_transaksi }}</td>
        <td>{{ $item->nim }}</td>
        <td>{{ $item->nama }}</td>
        <td>{{ $item->kode_jurusan }}</td>
        <td>{{ $item->jurusan }}</td>
        <td><div class="btn-group pull-right">
            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
            <span class="caret"></span>
            </button>
            <ul class="dropdown-menu pull-right" role="menu">
            <li>
                <a href="{{route('data-transaksi.show', $item->id)}}"><i class="glyphicon glyphicon-sunglasses"></i> Detail</a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="{{route('data-transaksi.edit', $item->id)}}"><i class="glyphicon glyphicon-edit"></i> Ubah</a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="{{route('data-transaksi.destroy', $item->id)}}" data-confirm-delete="true">
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
<a href="{{route('data-transaksi.create')}}" class="btn btn-success">Tambah Data</a>
@endsection