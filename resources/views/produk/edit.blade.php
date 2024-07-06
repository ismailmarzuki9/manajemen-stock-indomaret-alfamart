@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Edit Produk</h2>
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

    <form action="{{ route('produk.update',$produk->Produk_id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>id produk ini nanti di remove:</strong>
                    <input type="hidden" name="Produk_id" value="{{ $produk->Produk_id }}" class="form-control" placeholder="{{ $produk->Produk_id }}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>nama produk:</strong>
                <input type="text" name="Produk_name" class="form-control" value="{{ $produk->Produk_name }}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>categori_id:</strong>
                <p>Mohon perbaiki input categori ID:</p>
                <input type="text" name="categori_id" class="form-control" placeholder="nama produk" value="{{ $produk->categori_id }}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>harga:</strong>
                <input type="number" name="harga" class="form-control" placeholder="nama produk" value="{{ $produk->harga }}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <textarea type="text" class="form-control" style="height:150px" name="description">{{ $produk->description }}</textarea>
            </div>
        </div>
        <input type="hidden" name="SKU" class="form-control" value="{{$produk->SKU}}" placeholder="{{$produk->SKU}}">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Brand:</strong>
                <input type="text" name="brand" class="form-control" placeholder="nama produk"  value="{{$produk->brand}}">
            </div>
        </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>

    </form>
@endsection