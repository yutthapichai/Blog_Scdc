@extends('layouts.app')

@section('content')
    @include('admin.includes.inputserrors')
    <div class="card bg-dark text-white my-3">
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
                    <lebel for="category">Select a Category</lebel>
                    <select name="category_id" id="category" class="form-control">
                        <option value="" selected disabled>Please select category</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="from-group mb-3">
                  <label for="tags">Select tags</label>
                    @foreach($tags as $tag)
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="tags[]" value="{{ $tag->id }}" id="{{ $tag->id }}">
                        <label class="custom-control-label" for="{{ $tag->id }}">{{ $tag->tag }}</label>
                      </div>
                    @endforeach
                </div>
                <div class="form-group">
                    <lebel for="content">Content</lebel>
                    <textarea name="content" id="content" rows="10" class="form-control"></textarea>
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
