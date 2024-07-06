@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2> Show Produk</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('toko.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row noPrint">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID toko:</strong>
                {{ $toko->toko_id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama toko:</strong>
                {{ $toko->toko_name }}
            </div>
            <div class="form-group">
                <strong>Toko Type:</strong>
                {{ $toko->toko_type }}
            </div>
            <div class="form-group">
                <strong>lokasi:</strong>
                {{ $toko->location }}
            </div>
            <div class="form-group">
                <strong>created at:</strong>
                {{ $toko->created_at }}
            </div>
            <div class="form-group">
                <strong>updated_at:</strong>
                {{ $toko->updated_at }}
            </div>
        </div>
        <button onclick="window.print();" class="noPrint">Cetak</button>
    </div>
@endsection
