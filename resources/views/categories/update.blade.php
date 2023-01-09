@extends('master')

@section('content')
    <form method="post" action="{{ route('categories.update', ['categories' => $categories->id])}}">
        @method('put')

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Steve Rogers" value="{{old('name', $categories->name)}}">

            @error('name')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="code" class="form-label">Code</label>
            <input type="text" class="form-control @error('code') is-invalid @enderror" id="code" name="code" placeholder="portable" value="{{old('code', $categories->code)}}">

            @error('code')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" placeholder="some description" value="{{old('description', $categories->description)}}">

            @error('description')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <input class="btn btn-primary" type="submit" value="Update" />
        </div>
        @csrf
    </form>
    @csrf
@endsection
