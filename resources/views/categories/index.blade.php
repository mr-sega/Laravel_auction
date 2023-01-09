@extends('master')

@section('content')
    <a href="{{route('categories.create')}}" type="button" class="btn btn-primary">Add</a>
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
        @forelse($categories as $category)
            <tr>
                <th scope="row">{{$category->id}}</th>
                <td>{{$category->name }}</td>
                <td>{{$category->code }}</td>
                <td>{{$category->description }}</td>
                <td>{{$category->created_at }}</td>
                <td>{{$category->updated_at }}</td>
                <td>
                    <a href="{{route('categories.edit', ['categories' => $category->id] )}}" type="button" class="btn btn-primary">Edit</a>
                    <hr>
                    <form action="{{route('categories.destroy', ['categories' => $category->id] )}}" method="post">
                        @method('delete')
                        @csrf
                        <input type="submit" class="btn btn-danger" value="delete" />
                    </form>
                </td>
            </tr>
        @empty
            <p>No category</p>
            <tr>
                <td colspan="6">No category</td>
            </tr>
        @endforelse
        </tbody>
    </table>
@endsection
