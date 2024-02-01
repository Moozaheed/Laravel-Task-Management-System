@extends('tasks.layout') <!-- Extending the layout -->

@section('content') <!-- Opening content section -->

<div style="display: flex; justify-content: space-between;">
    <div class="col-lg-6">
        <h2>All Tasks</h2> <!-- Heading for the all tasks section -->
    </div>
    <div>
        <a class="btn btn-success" href="{{ route('tasks.create') }}">Create New Task</a> <!-- Button to create a new task -->
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p> {{ $message }} </p> <!-- Displaying success message, if any -->
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Details</th>
        <th width='215px'>Action</th>
    </tr>

    @foreach ($tasks as $task )
        <tr>
            <td>{{ $task->id }}</td>
            <td>{{ $task->name }}</td>
            <td>{{ $task->detail }}</td>
            <td>
                <form action="{{ route('tasks.destroy',$task->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('tasks.show',$task->id) }}">Show</a> <!-- Button to show task details -->
                    <a class="btn btn-primary" href="{{ route('tasks.edit',$task->id) }}">Edit</a> <!-- Button to edit task -->
                    @csrf <!-- CSRF protection -->
                    @method('DELETE') <!-- Using the DELETE method for deleting -->
                    <button type="submit" class="btn btn-danger">Delete</button> <!-- Button to delete task -->
                </form>
            </td>
        </tr>
    @endforeach
</table>

<!-- Pagination links -->
{{ $tasks->links() }} <!-- Displaying pagination links -->

@endsection <!-- Closing content section -->
