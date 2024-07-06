@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2> Show kategori</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('kategori.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row noPrint">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID kategori:</strong>
                <!-- {{ var_dump($kategori->harga)}} -->
                {{ $kategori->categori_id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama kategori:</strong>
                {{ $kategori->categori_name }}
            </div>
            <div class="form-group">
                <strong>Description:</strong>
                {{ $kategori->description }}
            </div>
            <div class="form-group">
                <strong>created at:</strong>
                {{ $kategori->created_at }}
            </div>
            <div class="form-group">
                <strong>updated_at:</strong>
                {{ $kategori->updated_at }}
            </div>
        </div>
        <button onclick="window.print();" class="noPrint">Cetak</button>
    </div>
@endsection
