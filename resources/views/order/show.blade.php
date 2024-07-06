@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2> Show order</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('order.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row noPrint">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Produc:</strong>
                <!-- {{ var_dump($order->harga)}} -->
                {{ $order->order_id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Toko ID:</strong>
                {{ $order->toko_id }}
            </div>
            <div class="form-group">
                <strong>Supplier ID:</strong>
                {{ $order->supplier_id }}
            </div>
            <div class="form-group">
                <strong>Tanggal order:</strong>
                {{ $order->order_date }}
            </div>
            <div class="form-group">
                <strong>Status:</strong>
                {{ $order->status }}
            </div>
            <div class="form-group">
                <strong>Jumlah :</strong>
                {{ $order->jumlah  }}
            </div>
            <div class="form-group">
                <strong>Harga:</strong>
                {{ $order->harga }}
            </div>
        </div>
        <button onclick="window.print();" class="noPrint">Cetak</button>
    </div>
@endsection
