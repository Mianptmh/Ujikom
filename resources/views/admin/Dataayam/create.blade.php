@extends('admin.index')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Ayam</div>

                <div class="card-body">
                <form action="{{ route('dataayam.store') }}" method="post" entype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Jenis Ayam</label>
                        <input class="form-control" type="text" name="jenis_ayam">
                    </div>
                    <div class="form-group">
                            <label for="">Berat Ayam</label>
                            <input class="form-control" type="number" name="berat">
                        </div>
                        <div class="form-group">
                            <label for="">Gambar</label>
                            <input class="form-control
                            @error('gambar') is-invalid @enderror" type="file"
                            name="gambar" id="" required>
                            @error('gambar')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                <div class="form-group">
                   <button type="submit" class="btn btn-outline-info">Simpan Data</button>
                    <a href="{{ route('dataayam.store') }}" class="btn btn-outline-info">Kembali</a>
                </div>
                </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
