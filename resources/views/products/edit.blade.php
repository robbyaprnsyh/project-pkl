@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Data Product</div>
                    <div class="card-body">
                        <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Nama Product</label>
                                <input type="text" class="form-control" name="name_product" value="{{ $product->name_product }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Stock</label>
                                <input type="text" class="form-control" name="stock" value="{{ $product->stock }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Price</label>
                                <input type="text" class="form-control" name="price" value="{{ $product->price }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <input type="text" class="form-control" name="description" value="{{ $product->description }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Name Brand</label>
                                <select class="form-control" name="id_brand">
                                    @foreach ($brand as $data)
                                        <option value="{{ $data->id }}" {{ $data->id == $product->id_brand ? 'selected' : ''}}>{{ $data->name_brand }}</option>
                                    @endforeach
                                </select>
                            </div>
                                <a href="{{ url('product') }}" class="btn btn-outline-danger">Back</a>
                                <button type="submit" class="btn btn-outline-primary">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
