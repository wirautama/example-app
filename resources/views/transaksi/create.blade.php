@extends('templates.template')
@section('content')

@section('title', 'Tambah Data Transaksi')
<div class="container-fluid">
    <form action="{{route('data-transaksi.store')}}" method="POST">
        @csrf
        <div class="box-body">
            <div class="form-group @error('kode_transaksi') has-error @enderror">
                <label for="kode_transaksi">@error('kode_transaksi')<i class="fa fa-times-circle-o"></i> @enderror Kode Transaksi</label>
                <input type="text" class="form-control" value="{{old('kode_transaksi')}}" name="kode_transaksi" id="kode_transaksi" placeholder="Kode Transaksi">
            @error('kode_transaksi')
                <div class="invalid-feedback text-danger">
                    {{ $message }}
                </div>
            @enderror
            </div>

            <div class="form-group @error('nim') has-error @enderror">
                <label for="agama">@error('nim')<i class="fa fa-times-circle-o"></i> @enderror NIM</label>
                <select class="form-control select2" value="" name="nim" style="width: 100%;">
                  <option>- Pilih NIM -</option>
                  @foreach ($mahasiswa as $item)
                  <option value="{{ $item->nim }}">
                    {{ $item->nim }} ( {{ $item->nama }})
                  </option>
                  @endforeach
                </select>
                @error('nim')
                <div class="invalid-feedback text-danger">
                    {{ $message }}
                </div>
                @enderror
              </div>

              <div class="form-group @error('nama') has-error @enderror">
                <label for="nama">@error('nama')<i class="fa fa-times-circle-o"></i> @enderror Nama</label>
                <select class="form-control select2" value="" name="nama" style="width: 100%;">
                  <option>- Pilih Mahasiswa -</option>
                  @foreach ($mahasiswa as $item)
                  <option value="{{ $item->nama }}">
                    {{ $item->nim }} ( {{ $item->nama }})
                  </option>
                  @endforeach
                </select>
                @error('nama')
                <div class="invalid-feedback text-danger">
                    {{ $message }}
                </div>
                @enderror
              </div>

              <div class="form-group @error('kode_jurusan') has-error @enderror">
                <label for="kode_jurusan">@error('kode_jurusan')<i class="fa fa-times-circle-o"></i> @enderror Kode Jurusan</label>
                <select class="form-control select2" value="" name="kode_jurusan" style="width: 100%;">
                  <option>- Pilih Kode Jurusan -</option>
                  @foreach ($master as $item)
                  <option value="{{ $item->kode_jurusan }}">
                    {{ $item->kode_jurusan }} ( {{ $item->jurusan }})
                  </option>
                  @endforeach
                </select>
                @error('kode_jurusan')
                <div class="invalid-feedback text-danger">
                    {{ $message }}
                </div>
                @enderror
              </div>

              <div class="form-group @error('jurusan') has-error @enderror">
                <label for="jurusan">@error('jurusan')<i class="fa fa-times-circle-o"></i> @enderror Jurusan</label>
                <select class="form-control select2" value="" name="jurusan" style="width: 100%;">
                  <option>- Pilih Jurusan -</option>
                  @foreach ($master as $item)
                  <option value="{{ $item->jurusan }}">
                    {{ $item->kode_jurusan }} ( {{ $item->jurusan }})
                  </option>
                  @endforeach
                </select>
                @error('jurusan')
                <div class="invalid-feedback text-danger">
                    {{ $message }}
                </div>
                @enderror
              </div>
    
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="/data-transaksi" class="btn btn-primary">Kembali</a>
    </form>
</div>
@endsection