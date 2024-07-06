@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Edit stock</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('stock.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('stock.update',$stock->stock_id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>id stock ini nanti di remove:</strong>
                    <input type="hidden" name="stock_id" value="{{ $stock->stock_id }}" class="form-control" placeholder="{{ $stock->stock_id }}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>toko ID:</strong>
                <input type="text" name="toko_id" class="form-control" value="{{ $stock->toko_id }}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>produk id:</strong>
                <input type="text" name="produk_id" class="form-control" placeholder="nama stock" value="{{ $stock->produk_id }}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>jumlah:</strong>
                <input type="number" name="jumlah" class="form-control" placeholder="nama stock" value="{{ $stock->jumlah }}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Produk Name:</strong>
                <input type="text" name="Produk_name" class="form-control" placeholder="nama stock"  value="{{$stock->Produk_name}}">
            </div>
        </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>

    </form>
@endsection