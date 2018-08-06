@extends('layouts.app')

@section('content')
    @include('admin.includes.inputserrors')
    <div class="card my-3">
        <div class="card-header">
            Create a new tag
        </div>
        <div class="card-body">
            <form action="{{route('tag.store')}}" method="post">
                {{ csrf_field()}}
                <div class="form-group">
                    <lebel for="tag">Tag</lebel>
                    <input type="text" name="tag" class="form-control">
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Store tag</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
