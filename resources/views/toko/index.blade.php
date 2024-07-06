@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>CRUD Laravel 8 untuk Pemula - Produk</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('toko.create') }}">Create Post</a>
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
            <th>Toko ID</th>
            <th>Toko Name</th>
            <th>Type Toko</th>
            <th>Lokasi</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th width="280px" class="text-center">Action</th>
        </tr>
        <!-- {{ var_dump($modelproducts)}} -->
        @foreach ($modelproducts as $modelproduct)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>{{ $modelproduct->toko_id }}</td>
            <td>{{ $modelproduct->toko_name }}</td>
            <td>{{ $modelproduct->toko_type  }}</td>
            <td>{{ $modelproduct->location }}</td>
            <td>{{ $modelproduct->created_at }}</td>
            <td>{{ $modelproduct->updated_at }}</td>
            <td class="text-center">
                <form action="{{ route('toko.destroy', $modelproduct->toko_id) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <a class="btn btn-info btn-sm" href="{{ route('toko.show', $modelproduct->toko_id) }}">Show</a>
                    <a class="btn btn-primary btn-sm" href="{{ route('toko.edit', $modelproduct->toko_id) }}">Edit</a>
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $modelproducts->links() !!}

@endsection