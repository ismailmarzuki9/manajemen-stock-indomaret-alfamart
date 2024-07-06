@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>CRUD Laravel 8 untuk Pemula - Supplier's</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('suppliers.create') }}">Create Post</a>
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
            <th>Supplier ID</th>
            <th>Supplier Name</th>
            <th>Info contac</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th width="280px" class="text-center">Action</th>
        </tr>
        <!-- {{ var_dump($suppliersModelss)}} -->
        @foreach ($suppliersModelss as $suppliersModels)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>{{ $suppliersModels->supplier_id }}</td>
            <td>{{ $suppliersModels->supplier_name }}</td>
            <td>{{ $suppliersModels->contac_info  }}</td>
            <td>{{ $suppliersModels->created_at }}</td>
            <td>{{ $suppliersModels->updated_at }}</td>
            <td class="text-center">
                <form action="{{ route('suppliers.destroy', $suppliersModels->supplier_id) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <a class="btn btn-info btn-sm" href="{{ route('suppliers.show', $suppliersModels->supplier_id) }}">Show</a>
                    <a class="btn btn-primary btn-sm" href="{{ route('suppliers.edit', $suppliersModels->supplier_id) }}">Edit</a>
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $suppliersModelss->links() !!}

@endsection