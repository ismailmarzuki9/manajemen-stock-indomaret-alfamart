@extends('template')

@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Create New Produk</h2>
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

<form action="{{ route('stock.store') }}" method="POST">
    @csrf
    
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID stock :{{ $placeholderstockId }}</strong>
                <input type="hidden" name="stock_id" class="form-control" value="{{ $placeholderstockId }}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>toko_id:</strong>
                <select class="custom-select" id="inputGroupSelect01" name="toko_id">
                    <option selected>Choose ID Toko</option>
                    @foreach ( $tokoids as $tokoid)
                        <option value="{{$tokoid}}">{{$tokoid}}</option>                   
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Supplier ID:</strong>
                <select class="custom-select" id="inputGroupSelect01" name="produk_id">
                    <option selected>Choose ID Supplier</option>
                    @foreach ( $produkids as $supplierid)
                        <option value="{{$supplierid}}">{{$supplierid}}</option>                   
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah:</strong>
                <input type="number" name="jumlah" class="form-control" placeholder="jumlah stock">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Produk name:</strong>
                <input type="text" name="Produk_name" class="form-control" placeholder="nama produk">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection