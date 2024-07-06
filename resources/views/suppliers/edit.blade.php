@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Edit suppliers</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('suppliers.index') }}"> Back</a>
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

    <form action="{{ route('suppliers.update',$supplier->supplier_id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>id supplier ini nanti di remove:</strong>
                    <input type="hidden" name="supplier_id" value="{{ $supplier->supplier_id }}" class="form-control" placeholder="{{ $supplier->supplier_id }}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>nama supplier:</strong>
                <input type="text" name="supplier_name" class="form-control" value="{{ $supplier->supplier_name }}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kontak Info:</strong>
                <p>Mohon perbaiki input categori ID:</p>
                <input type="text" name="contac_info" class="form-control" placeholder="nama supplier" value="{{ $supplier->contac_info }}">
            </div>
        </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>

    </form>
@endsection