@extends('tasks.layout') <!-- Extending the layout -->

@section('content') <!-- Opening content section -->

<div style="display: flex; justify-content: space-between;">
    <div class="col-lg-6">
        <h2>Edit Task</h2> <!-- Heading for the edit task section -->
    </div>
    <div>
        <a class="btn btn-primary" href="{{ route('tasks.index') }}">Back</a> <!-- Back button to return to the task index page -->
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li> <!-- Displaying validation errors -->
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('tasks.update', $product->id) }}" method="POST">
    @csrf <!-- CSRF protection -->
    @method('PUT') <!-- Using the PUT method for updating -->

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
            <button type="submit" class="btn btn-primary">Submit</button> <!-- Submit button for the form -->
        </div>
    </div>
</form>

@endsection <!-- Closing content section -->
