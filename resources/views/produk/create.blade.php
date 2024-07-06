@extends('template')

@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Create New Produk</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-secondary" href="{{ route('produk.index') }}"> Back</a>
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

<form action="{{ route('produk.store') }}" method="POST">
    @csrf
    
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID produk :{{ $placeholderProdukId }}</strong>
                <input type="hidden" name="Produk_id" class="form-control" value="{{ $placeholderProdukId }}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>nama produk:</strong>
                <input type="text" name="Produk_name" class="form-control" placeholder="nama produk">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>categori_id:</strong>
                <p>Mohon perbaiki input categori ID:</p>
                <input type="text" name="categori_id" class="form-control" placeholder="nama produk">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>harga:</strong>
                <input type="number" name="harga" class="form-control" placeholder="nama produk">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <textarea type="text" class="form-control" style="height:150px" name="description " placeholder="yyyb"></textarea>
            </div>
        </div>
        <input type="hidden" name="SKU" class="form-control" value="{{$placeholderSKUId}}" placeholder="{{$placeholderSKUId}}">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Brand:</strong>
                <input type="text" name="brand" class="form-control" placeholder="nama produk">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection