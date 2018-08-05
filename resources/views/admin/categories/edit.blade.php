@extends('layouts.app')

@section('content')
    @include('admin.includes.errors')
    <div class="card bg-dark text-white mt-3">
        <div class="card-body">
            <div class="card-title">
                Update category: {{$category->name}}
            </div>
            <form action="{{route('category.update',['id' => $category->id])}}" method="post">
                {{ csrf_field()}}
                <div class="form-group">
                    <lebel for="name">Name</lebel>
                    <input type="text" name="name" value="{{$category->name}}" class="form-control">
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-info" type="submit">Update Category</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop