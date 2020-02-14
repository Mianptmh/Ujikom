@extends('admin.index')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mengubah Data Transaksi</div>
                <div class="card-body">
                    <form action="{{ route('transaksi.update', $transaksi->id) }}" method="post">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Nama Pembeli</label>
                            <select class="form-control
                            @error('nama_pembeli') is-invalid @enderror"
                            name="id_pembeli" id="" required>
                                @foreach ($pembeli as $data)
                                    <option value="{{$data->id}}"
                                        @if ($data->id == $transaksi->id_pembeli) selected="selected" @endif>
                                        {{ $data->nama_pembeli }}
                                    </option>
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
                            @error('jenis_ayam') is-invalid @enderror"
                            name="id_dataayam" id="" required>
                                @foreach ($dataayam as $data)
                                    <option value="{{$data->id}}"
                                        @if ($data->id == $transaksi->id_dataayam) selected="selected" @endif>
                                        {{ $data->jenis_ayam }}
                                    </option>
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
                            @error('dataayam') is-invalid @enderror"
                            name="id_dataayam" id="" required>
                                @foreach ($kategori as $data)
                                    <option value="{{$data->id}}"
                                        @if ($data->id == $transaksi->id_dataayam) selected="selected" @endif>
                                        {{ $data->berat }}
                                    </option>
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
                               <textarea name="alamat" id="alamat" cols="30" rows="5" class="form-control"></textarea>
                        </div>

                            <div class="card-body">
                                <form action="{{route('transaksi.update', $transaksi->id)}}" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="_method" value="PATCH">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="">Jumlah Ayam</label>
                                        <input class="form-control
                                        @error('jumlah_ayam') is-invalid @enderror" type="text"
                                        name="jumlah_ayam" id="" value="{{$transaksi->jumlah_ayam}}" required>
                                        @error('jumlah_ayam')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>

                        <div class="card-body">
                            <form action="{{route('transaski.update', $transaski->id)}}" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="_method" value="PATCH">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="">Harga Total</label>
                                    <input class="form-control
                                    @error('harga_total') is-invalid @enderror" type="text"
                                    name="harga_total" id="" value="{{$transaski->harga_total}}" required>
                                    @error('harga_total')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                    @enderror
                                </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-info">
                                Simpan Data
                                </button>
                            </div>
                <div class="form-group">
                <a href="{{ url('transaksi.index') }}" class="btn btn-outline-info">Kembali</a>
    </div>
        </form>
            </div>
                </div>
                    </div>
                        </div>
                            </div>
@endsection
