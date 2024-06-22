@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if (session('success'))
                    <div class="alert alert-success fade show mt-3" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">Data Brand</div>
                    <div class="card-body">
                        <a href="{{ route('brand.create') }}" class="btn btn-outline-primary">Add Data</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Brand</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($brand as $data)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{ $data->name_brand }}</td>
                                        <form action="{{ route('brand.destroy', $data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <td>
                                                <a href="{{ route('brand.edit', $data->id) }}"
                                                    class="btn btn-outline-success">Edit</a>
                                                <a href="{{ route('brand.show', $data->id) }}"
                                                    class="btn btn-outline-warning">Show</a>
                                                <button class="btn btn-outline-danger" onclick="return confirm('Apakah anda ingin menghapus?')">Delete</button>
                                            </td>
                                        </form>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
