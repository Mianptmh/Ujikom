@extends('admin.index')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Ayam</div>

                <center>
                    <br>
                    <a href="{{ route('dataayam.create') }}" class="btn btn-primary">Tambah</a>
                </center>
                <div class="table-responsive">
                    <br>
                    <table class="table"3 >
                        <tr>
                            <th>No</th>
                            <th>Jenis</th>
                            <th>Harga</th>
                            <th>Berat</th>
                            <th>Gambar</th>
                            <th colspan="3" style="text-align:center;">Action</th>
                        </tr>
                        @php $no = 1; @endphp
                        @foreach ($dataayam as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->jenis }}</td>
                                <td>{{ $data->harga}}</td>
                                <td>{{ $data->berat}}</td>
                                <td><img src="{{asset('assets/img/dataayam/' .$data->gambar. '')}}"
                                    style="width:250px; height:250px;" alt="Foto"></td>
                                <td><a href="{{ route('dataayam.edit', $data->id) }}" class="btn btn sm btn-success">Edit</a></td>
                                <td>
                                    <form action="{{ route('dataayam.destroy', $data->id) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn sm btn-danger" type="submit">Hapus Data</button>
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
