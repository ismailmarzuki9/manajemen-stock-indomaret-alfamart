@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>CRUD Laravel 8 untuk Pemula - ORDER</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('order.create') }}">Create Post</a>
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
            <th>Order ID</th>
            <th>Toko Id</th>
            <th>Supplier ID</th>
            <th>order date</th>
            <th>Status</th>
            <th>jumlah</th>
            <th>Harga</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th width="280px" class="text-center">Action</th>
        </tr>
        
        @foreach ($orderModless as $orderModles)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>{{ $orderModles->order_id }}</td>
            <td>{{ $orderModles->toko_id }}</td>
            <td>{{ $orderModles->supplier_id  }}</td>
            <td>{{ $orderModles->order_date }}</td>
            <td>{{ $orderModles->status }}</td>
            <td>{{ $orderModles->jumlah }}</td>
            <td>{{ $orderModles->harga }}</td>
            <td>{{ $orderModles->created_at }}</td>
            <td>{{ $orderModles->updated_at }}</td>
            <td class="text-center">
                <form action="{{ route('order.destroy', $orderModles->order_id) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <a class="btn btn-info btn-sm" href="{{ route('order.show', $orderModles->order_id) }}">Show</a>
                    <a class="btn btn-primary btn-sm" href="{{ route('order.edit', $orderModles->order_id) }}">Edit</a>
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $orderModless->links() !!}

@endsection