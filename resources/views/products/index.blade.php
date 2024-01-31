@extends('products.layout')
@section('content')

<div style="display: flex; justify-content: space-between;">
    <div class="col-lg-6">
        <h2>All Tasks</h2>
    </div>
    <div>
        <a class="btn btn-success" href="{{ route('products.create') }}">Create New Task</a>
    </div>
</div>



@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p> {{ $message }} </p>
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Tittle</th>
        <th>Details</th>
        <th width='215px'>Action</th>
    </tr>



    @foreach ($products as $product )
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->detail }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
                
                </form>
            </td>
        </tr>
    @endforeach
</table>


<!-- Pagination links -->
{{ $products->links() }}


@endsection