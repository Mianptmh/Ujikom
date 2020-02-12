@extends('admin.index')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Data Ayam</div>

                <div class="card-body">
                <form action="{{ route('dataayam.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                    <label for="">No</label>
                    <input class="form-control" type="text" name="no">
                </div>
                <div class="form-group">
                    <label for="">Jenis</label>
                    <input class="form-control" type="text" name="jenis">
                </div>
                <div class="form-group">
                        <label for="">Harga</label>
                        <input class="form-control" type="text" name="harga">
                    </div>
                    <div class="form-group">
                            <label for="">Berat</label>
                            <input class="form-control" type="text" name="berat">
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
                    <a href="{{ route('dataayam.index') }}" class="btn btn-outline-info">Back</a>
                </div>
                </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
