@extends('master')

@section('content')

    <form method="post" action="{{ route('products.store') }}">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Техника" value="{{old('name')}}">

            @error('name')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="code" class="form-label">Code</label>
            <input type="text" class="form-control @error('code') is-invalid @enderror" id="code" name="code" placeholder="sumsung" value="{{old('code')}}">

            @error('code')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" placeholder="some description" value="{{old('description')}}">

            @error('description')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="100" value="{{old('price')}}">

            @error('price')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="category_id" class="col-sm-2 col-form-label">Category:</label>
                <div class="col-sm-6">
                    <select name="category_id" id="category_id" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}"
                            @isset($product)
                                @if($product->category_id == $category->id)
                                    selected
                                    @endif
                                @endisset
                            >{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
        </div>
        <div class="mb-3">
            <input class="btn btn-primary" type="submit" value="create" />
        </div>
        @csrf
    </form>
    @csrf
@endsection
