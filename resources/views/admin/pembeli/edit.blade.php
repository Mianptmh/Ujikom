@extends('admin.index')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mengubah Data Distributor</div>
                <div class="card-body">
                    <form action="{{ route('pembeli.update', $pembeli->id) }}" method="post">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
                            <div class="form-group">
                                <label for="">Nama </label>
                                <input class="form-control" value="{{ $pembeli->nama }}" type="text" name="nama">
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                               <textarea name="alamat" id="alamat" cols="30" rows="5" class="form-control" required>{{ $pembeli->alamat}}</textarea>
                        </div>
                                <div class="form-group">
                                        <label for="">No Hp </label>
                                        <input class="form-control" value="{{ $pembeli->no_hp }}" type="text" name="no_hp" id="">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-outline-info">Simpan Data</button>
                                         <a href="{{ route('pembeli.store') }}" class="btn btn-outline-info">Kembali</a>
                                     </div>
    </div>
        </form>
            </div>
                </div>
                    </div>
                        </div>
                            </div>
@endsection
