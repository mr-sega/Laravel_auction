@extends('master')

@section('content')
    <a href="{{route('products.create')}}" type="button" class="btn btn-primary">Add</a>
    <hr>
    <table class="table table-success table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Code</th>
            <th scope="col">Description</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @forelse($products as $product)
            <tr>
                <th scope="row">{{$product->id}}</th>
                <td>{{$product->name }}</td>
                <td>{{$product->code }}</td>
                <td>{{$product->description }}</td>
                <td>{{$product->created_at }}</td>
                <td>{{$product->updated_at }}</td>
                <td>
                    <a href="{{route('products.edit', ['products' => $product->id] )}}" type="button" class="btn btn-primary">Edit</a>
                    <hr>
                    <form action="{{route('products.destroy', ['products' => $product->id] )}}" method="post">
                        @method('delete')
                        @csrf
                        <input type="submit" class="btn btn-danger" value="delete" />
                    </form>
                </td>
            </tr>
        @empty
            <p>No products</p>
            <tr>
                <td colspan="6">No products</td>
            </tr>
        @endforelse
        </tbody>
    </table>
@endsection
