@extends('templates.template')
@section('content')

@section('title', 'Tambah Data Master')
<div class="container-fluid">
    <form action="{{route('data-master.store')}}" method="POST">
    @csrf
    <div class="box-body">
        <div class="form-group @error('kode_jurusan') has-error @enderror">
            <label for="kode_jurusan">@error('kode_jurusan')<i class="fa fa-times-circle-o"></i> @enderror Kode Jurusan</label>
            <input type="text" class="form-control" value="{{old('kode_jurusan')}}" name="kode_jurusan" id="kode_jurusan" placeholder="Kode Jurusan">
        @error('nis')
            <div class="invalid-feedback text-danger">
                {{ $message }}
            </div>
        @enderror
        </div>
        <div class="form-group @error('jurusan') has-error @enderror">
            <label for="jurusan">@error('jurusan')<i class="fa fa-times-circle-o"></i> @enderror Jurusan</label>
            <input type="text" class="form-control" value="{{old('jurusan')}}" name="jurusan" id="jurusan" placeholder="Jurusan">
        @error('nis')
            <div class="invalid-feedback text-danger">
                {{ $message }}
            </div>
        @enderror
        </div>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection