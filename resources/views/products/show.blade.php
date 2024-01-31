@extends('products.layout')
@section('content')

<div style="display: flex; justify-content: space-between;">
    <div class="col-lg-6">
        <h2>Show Task</h2>
    </div>
    <div>
        <a class="btn btn-primary" href="{{ route('products.index') }}">Back</a>
    </div>
</div>


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
        <div class="border p-3">
            <div class="form-group">
                <strong class="text-lg">Name:</strong> <!-- Added text-lg class for larger text size -->
                {{ $product->name }}
            </div>    
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="border p-3">
            <div class="form-group">
                <strong class="text-lg">Detail:</strong> <!-- Added text-lg class for larger text size -->
                {{ $product->detail }}
            </div>
        </div>
    </div>
</div>


@endsection