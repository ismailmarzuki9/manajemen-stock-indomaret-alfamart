@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2> Show Supplier</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('suppliers.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row noPrint">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID supplier:</strong>
                
                {{ $supplier->supplier_id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama supplier:</strong>
                {{ $supplier->supplier_name }}
            </div>
            <div class="form-group">
                <strong>Contac info:</strong>
                {{ $supplier->contac_info }}
            </div>
            <div class="form-group">
                <strong>updated_at:</strong>
                {{ $supplier->updated_at }}
            </div>
        </div>
        <button onclick="window.print();" class="noPrint">Cetak</button>
    </div>
@endsection
