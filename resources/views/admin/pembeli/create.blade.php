@extends('admin.index')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Pembelian</div>

                <div class="card-body">
                <form action="{{ route('pembeli.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                    <label for="">No</label>
                    <input class="form-control" type="text" name="no">
                </div>
                <div class="form-group">
                    <label for="">Nama</label>
                    <input class="form-control" type="text" name="nama">
                </div>
                <div class="form-group">
                        <label for="">Alamat</label>
                        <input class="form-control" type="text" name="alamat">
                    </div>
                    <div class="form-group">
                            <label for="">No hp</label>
                            <input class="form-control" type="text" name="no_hp">
                        </div>
                <div class="form-group">
                   <button type="submit" class="btn btn-outline-info">Simpan Data</button>
                    <a href="{{ route('pembeli.index') }}" class="btn btn-outline-info">Back</a>
                </div>
                </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
