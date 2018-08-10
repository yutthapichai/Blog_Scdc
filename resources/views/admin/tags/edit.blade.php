@extends('layouts.app')

@section('content')
    @include('admin.includes.inputserrors')
    <div class="row">
        <div class="col-lg-6">
          <div class="card my-3 bg-dark text-white">
              <div class="card-header">
                  Edit tag: {{ $tag->tag }}
              </div>
              <div class="card-body">
                  <form action="{{route('tag.update', ['id' => $tag->id])}}" method="post">
                      {{ csrf_field()}}
                      <div class="form-group">
                          <lebel for="tag">Tag</lebel>
                          <input type="text" value="{{ $tag->tag }}" name="tag" class="form-control">
                      </div>
                      <div class="form-group">
                          <div class="text-center">
                              <button class="btn btn-info" type="submit">Update tag</button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
        </div>
    </div>
@stop
