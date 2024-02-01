@extends('tasks.layout')
@section('content')

<!-- Section for displaying task details -->
<div style="display: flex; justify-content: space-between;">
    <div class="col-lg-6">
        <h2>Show Task</h2>
    </div>
    <div>
        <a class="btn btn-primary" href="{{ route('tasks.index') }}">Back</a>
    </div>
</div>

<!-- Task details container -->
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
        <div class="border p-3">
            <div class="form-group">
                <strong class="text-lg">Name:</strong> <!-- Added text-lg class for larger text size -->
                {{ $task->name }}
            </div>    
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="border p-3">
            <div class="form-group">
                <strong class="text-lg">Detail:</strong> <!-- Added text-lg class for larger text size -->
                {{ $task->detail }}
            </div>
        </div>
    </div>
</div>

@endsection
