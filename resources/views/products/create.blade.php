@extends('products.layout');
@section('content');


<div style="display: flex; justify-content: space-between;">
    <div class="col-lg-6">
        <h2>Add New Tasks</h2>
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

<form action="{{ route('products.store') }}" method="POST">
    @csrf 
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                <input type="text" name="name" class="form-control" placeholder="Title" style="margin-bottom: 10px;">
            </div>    
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <textarea name="detail" class="form-control" rows="6" placeholder="Detail"></textarea>
            </div>    
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center"  style="margin-top: 10px;">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection