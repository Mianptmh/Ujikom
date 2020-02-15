@extends('admin.index')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Transaksi</div>

                <div class="card-body">
                <form action="{{ route('transaksi.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama</label>
                        <select class="form-control
                        @error('nama') is-invalid @enderror" name="id_pembeli" id="" required>
                            @foreach ($pembeli as $data)
                                <option value="{{$data->id}}">
                                {{$data->nama}}</option>
                            @endforeach
                        </select>
                        @error('pembeli')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Ayam</label>
                        <select class="form-control
                        @error('jenis_ayam') is-invalid @enderror" name="id_dataayam" id="" required>
                            @foreach ($dataayam as $data)
                                <option value="{{$data->id}}">
                                {{$data->jenis_ayam}}</option>
                            @endforeach
                        </select>
                        @error('dataayam')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Berat</label>
                        <select class="form-control
                        @error('berat') is-invalid @enderror" name="id_dataayam" id="" required>
                            @foreach ($dataayam as $data)
                                <option value="{{$data->id}}">
                                {{$data->berat}}</option>
                            @endforeach
                        </select>
                        @error('dataayam')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <select class="form-control
                        @error('alamat') is-invalid @enderror" name="id_pembeli" id="" required>
                            @foreach ($pembeli as $data)
                                <option value="{{$data->id}}">
                                {{$data->alamat}}</option>
                            @endforeach
                        </select>
                        @error('pembeli')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="card-body">
                        <form action="{{route('transaksi.store')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="">Jumlah Ayam</label>
                                <input class="form-control
                                @error('jumlah_ayam') is-invalid @enderror" type="text"
                                name="jumlah_ayam" id="" required>
                                @error('jumlah_ayam')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="card-body">
                                <form action="{{route('transaksi.store')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="">Harga Total</label>
                                        <input class="form-control
                                        @error('harga_total') is-invalid @enderror" type="text"
                                        name="harga_total" id="" required>
                                        @error('harga_total')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-outline-info">Simpan Data</button>
                                         <a href="{{ route('transaksi.store') }}" class="btn btn-outline-info">Kembali</a>
                                     </div>
                </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
