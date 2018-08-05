@extends('layouts.app')

@section('content')

@include('admin.includes.errors')
    <div class="card mt-3">
        <div class="card-header">
            Create a new category
        </div>
        <div class="card-body">
            <form action="{{route('category.store')}}" method="post">
                {{ csrf_field()}}
                <div class="form-group">
                    <lebel for="name">Name</lebel>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Store Category</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop