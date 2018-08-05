@extends('layouts.app')

@section('content')
    <div class="card mt-3">
        <div class="card-header">
            Create a new Posts
        </div>
        <div class="card-body">
            <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field()}}
                <div class="form-group">
                    <lebel for="title">Title</lebel>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <lebel for="featured">Featured image</lebel>
                    <input type="file" name="featured" class="form-control">
                </div>
                <div class="form-group">
                    <lebel for="content">Content</lebel>
                    <textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Store Post</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop