@extends('admin.index')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Distributor</div>

                <center>
                    <br>
                    <a href="{{ route('transaksi.create') }}" class="btn btn-primary">Tambah</a>
                </center>
                <div class="table-responsive">
                    <br>
                    <table class="table"3 >
                        <tr>
                            <th>Nama</th>
                            <th>Jenis Hewan</th>
                            <th>Berat</th>
                            <th>Jumlah Ayam</th>
                            <th>Alamat</th>
                            <th>Harga Total</th>
                            <th colspan="3" style="text-align:center;">Action</th>
                        </tr>
                        @php $no = 1; @endphp
                        @foreach ($transaksi as $data)
                            <tr>
                                <td>{{$data->pembeli->nama}}</td>
                                <td>{{$data->dataayam->jenis_ayam}}</td>
                                <td>{{$data->dataayam->berat}}</td>
                                <td>{{ $data->jumlah_ayam }}</td>
                                <td>{{ $data->pembeli->alamat}}</td>
                                <td>{{ $data->harga_total}}</td>
                                <td><a href="{{ route('transaksi.edit', $data->id) }}" class="btn btn sm btn-success">Edit</a></td>
                                <td>
                                    <form action="{{ route('transaksi.destroy', $data->id) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn sm btn-danger" type="submit">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
