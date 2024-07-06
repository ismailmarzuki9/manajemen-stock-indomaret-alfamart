@extends('template')

@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Create New order</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-secondary" href="{{ route('order.index') }}"> Back</a>
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

<form action="{{ route('order.store') }}" method="POST">
    @csrf
    
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID order :{{ $placeholderorderId }}</strong>
                <input type="hidden" name="order_id" class="form-control" value="{{ $placeholderorderId }}">
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
                <select class="custom-select" id="inputGroupSelect01" name="supplier_id">
                    <option selected>Choose ID Supplier</option>
                    @foreach ( $supplierid as $supplierid)
                        <option value="{{$supplierid}}">{{$supplierid}}</option>                   
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>tanggal order:</strong>
                <input type="date" name="order_date" class="form-control" placeholder="nama order">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <select class="custom-select" id="inputGroupSelect01" name="status">
                <option selected>Choose...</option>
                <option value="sending">sending</option>
                <option value="pending">pending</option>
                <option value="finish">finish</option>
            </select>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>jumlah:</strong>
                <input type="number" name="jumlah" class="form-control" placeholder="nama order">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>harga:</strong>
                <input type="number" name="harga" class="form-control" placeholder="nama order">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection