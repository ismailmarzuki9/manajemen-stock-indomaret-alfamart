@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>CRUD Laravel 8 untuk Pemula - Produk</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('produk.create') }}">Create Post</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th width="20px" class="text-center">No</th>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Category ID</th>
            <th>Price</th>
            <th>Description</th>
            <th>SKU</th>
            <th>Brand</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th width="280px" class="text-center">Action</th>
        </tr>
        
        @foreach ($modelproducts as $modelproduct)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>{{ $modelproduct->Produk_id }}</td>
            <td>{{ $modelproduct->Produk_name }}</td>
            <td>{{ $modelproduct->categori_id  }}</td>
            <td>{{ $modelproduct->harga }}</td>
            <td>{{ $modelproduct->description }}</td>
            <td>{{ $modelproduct->SKU }}</td>
            <td>{{ $modelproduct->brand }}</td>
            <td>{{ $modelproduct->created_at }}</td>
            <td>{{ $modelproduct->updated_at }}</td>
            <td class="text-center">
                <form action="{{ route('produk.destroy', $modelproduct->Produk_id) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <a class="btn btn-info btn-sm" href="{{ route('produk.show', $modelproduct->Produk_id) }}">Show</a>
                    <a class="btn btn-primary btn-sm" href="{{ route('produk.edit', $modelproduct->Produk_id) }}">Edit</a>
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $modelproducts->links() !!}

@endsection