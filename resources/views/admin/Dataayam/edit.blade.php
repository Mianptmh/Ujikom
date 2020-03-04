@extends('admin.index')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mengubah DataAyam</div>
                <div class="card-body">
                    <form action="{{ route('dataayam.update', $dataayam->id) }}" method="post">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
                            <div class="form-group">
                                <label for="">NJenis Ayam</label>
                                <input class="form-control" value="{{ $dataayam->jenis_ayam }}" type="text" name="jenis_ayam">
                            </div>
                            <div class="form-group">
                                <label for="">Berat</label>
                                <input class="form-control" value="{{ $dataayam->berat }}" type="text" name="berat">
                            </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-outline-info">Simpan Data</button>
                                         <a href="{{ route('dataayam.store') }}" class="btn btn-outline-info">Kembali</a>
                                     </div>
    </div>
        </form>
            </div>
                </div>
                    </div>
                        </div>
                            </div>
@endsection
