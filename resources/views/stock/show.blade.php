@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2> Show stock</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('stock.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <!-- masukan kopsorat // untuk di cetak -->

    <div class="row noPrint">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Stock:</strong>
                <!-- {{ var_dump($stock->harga)}} -->
                {{ $stock->stock_id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Toko ID:</strong>
                {{ $stock->toko_id }}
            </div>
            <div class="form-group">
                <strong>Produk ID:</strong>
                {{ $stock->produk_id }}
            </div>
            <div class="form-group">
                <strong>Jumlah:</strong>
                {{ $stock->jumlah }}
            </div>
            <div class="form-group">
                <strong>produk Name :</strong>
                {{ $stock->Produk_name  }}
            </div>
            <div class="form-group">
                <strong>created at:</strong>
                {{ $stock->created_at }}
            </div>
            <div class="form-group">
                <strong>updated_at:</strong>
                {{ $stock->updated_at }}
            </div>
        </div>
        <button onclick="window.print();" class="noPrint">Cetak</button>
    </div>
@endsection
