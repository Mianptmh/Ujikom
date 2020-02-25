@extends('admin.index')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mengubah Data Ayam</div>
                <div class="card-body">
                    <form action="{{ route('dataayam.update', $dataayam->id) }}" method="post">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
                            <div class="form-group">
                                <label for="">Jenis Ayam </label>
                                <input class="form-control" value="{{ $dataayam->jenis_ayam }}" type="text" name="nama">
                            </div>
                            <div class="form-group">
                                <label for="">Berat</label>
                                <input class="form-control" value="{{ $dataayam->berat }}" type="text" name="berat">
                            </div>
                            <div class="form-group">
                                <label for="">Gambar</label>
                                @if (isset($dataayam) && $dataayam->gambar)
                                    <p>
                                        <img src="{{ asset('assets/img/dataayam/'
                                        .$dataayam->gambar.'') }}"
                                        style="margin-top:15px;margin-bottom:15px;
                                        max-height:100px;border:1px;border-color:black;" alt="">
                                    </p>
                                @endif
                                <input class="form-control
                                @error('gambar') is-invalid @enderror" type="file"
                                name="gambar" id="" value="{{$dataayam->gambar}}">
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
    </div>
        </form>
            </div>
                </div>
                    </div>
                        </div>
                            </div>
@endsection
