@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>CRUD Laravel 8 untuk Pemula - Stock</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('stock.create') }}">Create Post</a>
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
            <th>Stock ID</th>
            <th>toko ID</th>
            <th>Produk ID</th>
            <th>Jumlah</th>
            <th>product name</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th width="280px" class="text-center">Action</th>
        </tr>
        <!-- {{ var_dump($modelstockss)}} -->
        @foreach ($modelstockss as $modelstocks)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>{{ $modelstocks->stock_id }}</td>
            <td>{{ $modelstocks->toko_id }}</td>
            <td>{{ $modelstocks->produk_id  }}</td>
            <td>{{ $modelstocks->jumlah }}</td>
            <td>{{ $modelstocks->Produk_name }}</td>
            <td>{{ $modelstocks->created_at }}</td>
            <td>{{ $modelstocks->updated_at }}</td>
            <td class="text-center">
                <form action="{{ route('stock.destroy', $modelstocks->stock_id) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <a class="btn btn-info btn-sm" href="{{ route('stock.show', $modelstocks->stock_id) }}">Show</a>
                    <a class="btn btn-primary btn-sm" href="{{ route('stock.edit', $modelstocks->stock_id) }}">Edit</a>
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $modelstockss->links() !!}

@endsection