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
                            <option value="{{$category->id}}"
                              {{{-- category is function of post model--}}}
                              @if($post->category->id == $category->id)
                                selected
                              @endif
                              >{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="from-group mb-3">
                  <label for="tags">Select tags</label>
                    @foreach($tags as $tag)
                      <div class="custom-control custom-checkbox">
                        <input
                        type="checkbox"
                        class="custom-control-input"
                        name="tags[]"
                        value="{{ $tag->id }}"
                        @foreach($post->tags as $tp)
                          @if($tag->id == $tp->id)
                            checked
                          @endif
                        @endforeach
                        id="{{ $tag->id }}">
                        <label class="custom-control-label" for="{{ $tag->id }}">{{ $tag->tag }}</label>
                      </div>
                    @endforeach
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
