@extends('admin.index')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Distributor</div>

                <center>
                    <br>
                    <a href="{{ route('pembeli.create') }}" class="btn btn-primary">Tambah</a>
                </center>
                <div class="table-responsive">
                    <br>
                    <table class="table"3 >
                        <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No Hp</th>
                            <th colspan="3" style="text-align:center;">Action</th>
                        </tr>
                        @php $no = 1; @endphp
                        @foreach ($pembeli as $data)
                            <tr>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->alamat}}</td>
                                <td>{{ $data->no_hp}}</td>
                                <td><a href="{{ route('pembeli.edit', $data->id) }}" class="btn btn sm btn-success">Edit</a></td>
                                <td>
                                    <form action="{{ route('pembeli.destroy', $data->id) }}" method="POST">
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
