@extends('admin.index')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mengubah Data Pembeli</div>
                <div class="card-body">
                    <form action="{{ route('pembeli.update', $pembeli->id) }}" method="post">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
                            <div class="form-group">
                                <label for="">Nama </label>
                                <input class="form-control" value="{{ $pembeli->nama }}" type="text" name="nama">
                            </div>
                            <div class="form-group">
                                    <label for="">Alamat </label>
                                    <input class="form-control" value="{{ $pembeli->alamat }}" type="text" name="alamat">
                                </div>
                                <div class="form-group">
                                        <label for="">No Hp </label>
                                        <input class="form-control" value="{{ $pembeli->no_hp }}" type="text" name="no_hp">
                                    </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-info">
                                Simpan Data
                                </button>
                            </div>
                <div class="form-group">
                <a href="{{ url('pembeli.index') }}" class="btn btn-outline-info">Kembali</a>
    </div>
        </form>
            </div>
                </div>
                    </div>
                        </div>
                            </div>
@endsection
