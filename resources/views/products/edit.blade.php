@extends('products.layout')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <h2>Edit Product</h2>
        </div>

        <div class="pull-riht">
            <a class="btn btn-primary" href="{{ route('products.index') }}">Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br></br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach 
        </ul>
    </div>
@endif


<form action="{{ route('products.update',$product->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="from-group">
                <strong>Name:</strong>
                <input type="text" name="name" value="{{ $product->name }}" class="from-control" placeholder="Name">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="from-group">
                <strong>Detail:</strong>
                <input type="text" name="detail" value="{{ $product->detail }}" class="from-control" placeholder="Detail">
                {{-- <input class="from-control" style="height:150px" name="detail" placeholder="Detail">{{ $product->detail }}> --}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>

@endsection