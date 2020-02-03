@extends('layouts.app')
@section('content')
<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">Data Barang</h5><br>
                <center>
                    <a href="{{ route('barang.create')}}"
                        class="la la-cloiud-upload btn btn-info btn-rounded btn-floating btn-outline=">&nbsp;Tambah Data
                    </a>
                </center>
                <div class="card-body">
                    <table id="bs4-table" class="table table-striped tablebordered" style="width:100%">
                        <thead>
                                <tr>
                                <th>Jenis</th>
                                <th>Harga</th>
                                <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <body>
                            @foreach ($barang as $data)
                            <tr>
                                <td>{{$data->jenis}}</td>
                                <td>{{$data->harga}}</td>

                                <td style="text-align: center;">
                                    <form action="{{route('barang.destory', $data->id)}}" method="post">
                                        {{csrf_field()}}
                                    <a href="{{route('barang.edit', $data->id)}}"
                                        class="zmdi zmdi -eye btn btn-succes btn-rounded btn-floating btn-outline"> Edit
                                    </a>
                                    <a href="{{route('barang.show', $data->id)}}"
                                        class="zmdi zmdi -eye btn btn-succes btn-rounded btn-floating btn-outline"> Show
                                    </a>
                                        <input type="hidden" name="method" value="Delete">
                                        <button type="submit" class="zmdi zmdi-delete btn-rounded btn-floating btn btn-dangerbtn btn-danger btn-outline">Delete
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </body>
                    </table>
                </div>
            </div>
        </div>
    </div>
</endsection>
@endsection
