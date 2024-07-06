@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>CRUD Laravel 8 untuk Pemula - Kategori</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('kategori.create') }}">Create Post</a>
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
            <th>Kategori ID</th>
            <th>Kategori Name</th>
            <th>Description ID</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th width="280px" class="text-center">Action</th>
        </tr>
        
        @foreach ($modelkategoris as $modelkategori)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>{{ $modelkategori->categori_id }}</td>
            <td>{{ $modelkategori->categori_name }}</td>
            <td>{{ $modelkategori->description  }}</td>
            <td>{{ $modelkategori->created_at }}</td>
            <td>{{ $modelkategori->updated_at }}</td>
            <td class="text-center">
                <form action="{{ route('kategori.destroy', $modelkategori->categori_id) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <a class="btn btn-info btn-sm" href="{{ route('kategori.show', $modelkategori->categori_id) }}">Show</a>
                    <a class="btn btn-primary btn-sm" href="{{ route('kategori.edit', $modelkategori->categori_id) }}">Edit</a>
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $modelkategoris->links() !!}

@endsection