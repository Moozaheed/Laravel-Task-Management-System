@extends('products.layout')
@section('content')

<div style="display: flex; justify-content: space-between;">
    <div class="col-lg-6">
        <h2>Edit Task</h2>
    </div>
    <div>
        <a class="btn btn-primary" href="{{ route('products.index') }}">Back</a>
    </div>
</div>


@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach 
        </ul>
    </div>
@endif


<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
            <div class="border p-3">
                <div class="form-group">
                    <strong class="text-lg">Name:</strong>
                    <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
            <div class="border p-3">
                <div class="form-group">
                    <strong class="text-lg">Detail:</strong>
                    <input type="text" name="detail" value="{{ $product->detail }}" class="form-control" placeholder="Detail">
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>


@endsection