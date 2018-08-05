@extends('layouts.app')

@section('content')
    @include('admin.includes.inputserrors')
    <div class="card bg-dark text-white my-3">
        <div class="card-header">
            Edit post: {{$post->title}}
        </div>
        <div class="card-body">
            <form action="{{ route('post.update', ['id' => $post->id]) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field()}}
                <div class="form-group">
                    <lebel for="title">Title</lebel>
                    <input type="text" name="title" class="form-control" value="{{$post->title}}">
                </div>
                <div class="form-group">
                    <lebel for="featured">Featured image</lebel>
                    <input type="file" name="featured" class="form-control">
                </div>
                <div class="form-group">
                    <lebel for="category">Select a Category</lebel>
                    <select name="category_id" id="category" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <lebel for="content">Content</lebel>
                    <textarea name="content" id="content" cols="5" rows="5" class="form-control">{{$post->content}}</textarea>
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Update Post</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop