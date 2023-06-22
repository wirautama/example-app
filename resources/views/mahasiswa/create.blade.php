@extends('templates.template')
@section('content')

@section('title', 'Tambah Data Mahasiswa')
<div class="container-fluid">
    <form action="{{route('data-mahasiswa.store')}}" method="POST">
    @csrf
    <div class="box-body">
        <div class="form-group @error('nim') has-error @enderror">
            <label for="nim">@error('nim')<i class="fa fa-times-circle-o"></i> @enderror NIM</label>
            <input type="number" class="form-control" value="{{old('nim')}}" name="nim" id="nim" placeholder="NIM">
        @error('nis')
            <div class="invalid-feedback text-danger">
                {{ $message }}
            </div>
        @enderror
        </div>

        <div class="form-group @error('nama') has-error @enderror">
            <label for="nama">@error('nama')<i class="fa fa-times-circle-o"></i> @enderror Nama</label>
            <input type="text" class="form-control" value="{{old('nama')}}" name="nama" id="nama" placeholder="Nama">
        @error('nis')
            <div class="invalid-feedback text-danger">
                {{ $message }}
            </div>
        @enderror
        </div>

        <div class="form-group @error('jenis_kelamin') has-error @enderror">
            <label for="jenis_kelamin">@error('jenis_kelamin')<i class="fa fa-times-circle-o"></i> @enderror Jenis Kelamin</label><br>
            <div class="radio">
                <label>
                  <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="1" checked>
                  Laki-laki
                </label>
                <label>
                    <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="0">
                    Perempuan
                  </label>
            </div>
            @error('jenis_kelamin')
            <div class="invalid-feedback text-danger">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="form-group @error('tanggal_lahir') has-error @enderror">
            <label for="tanggal_lahir">@error('tanggal_lahir')<i class="fa fa-times-circle-o"></i> @enderror Tanggal Lahir:</label>
            <div class="input-group date">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
              <input type="text" data-date-format="yyyy-mm-dd" name="tanggal_lahir" value="{{old('tanggal_lahir')}}" class="form-control pull-right" id="datepicker">
            </div>
            @error('tanggal_lahir')
            <div class="invalid-feedback text-danger">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="form-group @error('alamat') has-error @enderror">
            <label for="alamat">@error('alamat')<i class="fa fa-times-circle-o"></i> @enderror Alamat</label>
            <input type="text"alamat class="form-control" value="{{old('alamat')}}" name="alamat" id="alamat" placeholder="Nama">
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