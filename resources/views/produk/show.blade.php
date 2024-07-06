@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2> Show Produk</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('produk.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row noPrint">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Produc:</strong>
                <!-- {{ var_dump($produk->harga)}} -->
                {{ $produk->Produk_id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Produk:</strong>
                {{ $produk->Produk_name }}
            </div>
            <div class="form-group">
                <strong>Categori ID:</strong>
                {{ $produk->categori_id }}
            </div>
            <div class="form-group">
                <strong>Harga:</strong>
                {{ $produk->harga }}
            </div>
            <div class="form-group">
                <strong>Description:</strong>
                {{ $produk->description }}
            </div>
            <div class="form-group">
                <strong>SKU :</strong>
                {{ $produk->SKU  }}
            </div>
            <div class="form-group">
                <strong>Nama brand:</strong>
                {{ $produk->brand }}
            </div>
            <div class="form-group">
                <strong>created at:</strong>
                {{ $produk->created_at }}
            </div>
            <div class="form-group">
                <strong>updated_at:</strong>
                {{ $produk->updated_at }}
            </div>
        </div>
        <button onclick="window.print();" class="noPrint">Cetak</button>
    </div>
@endsection
