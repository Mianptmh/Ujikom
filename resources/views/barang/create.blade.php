@extends('layouts.app')
@section('content')
<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <center>
                    <div class="card-header">Tambah Data Barang</div>
                </center>

                <div class="form-group">
                    <label for="">warna</label>
                    <input class="form-control
                    @error('jenis') is-invalid @enderror" type="text"
                    name="jenis" id="" required>
                    @error('jenis')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">harga</label>
                    <input class="form-control
                    @error('harga') is-invalid @enderror" type="text"
                    name="harga" id="" required>
                    @error('harga')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-outline-info btn-rounded btn-block">
                        Simpan Data
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</section>
@endsection
