@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mengubah Data</div>
                    <div class="card-body">
                        <form action="{{ route('barang.update',$barang->id) }}"method="post">
                            <input name="_method" type="hidden" value="PATCH">
                            {{ csrf_field() }}
    <div class="form-group">
        <label for="">Jenis</label>
        <input class="form-control" value="{{ $barang->jenis}}" type="text" name="jenis">
    </div>
    <div class="form-group">
        <label for="">Harga</label>
        <input class="form-control" value="{{ $barang->harga}}" type="text" name="harga">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-outline-info">
        Simpan Data
        </button>
    </div>
    <div class="form-group">
        <a href="{{ iurl('barang.index') }}" class="btn btn-outline-info">Kembali</a>
    </div>
        </form>
            </div>
                </div>
                    </div>
                        </div>
</section>
@endsection
