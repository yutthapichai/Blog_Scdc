@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col">
    <div class="card mt-3 bg-info text-white text-center" >
        <div class="card-header "><strong>PUBRISH POSTS</strong></div>
        <div class="card-body">
            <h1 class="px-3">{{ $post_count }}</h1>
        </div>
    </div>
  </div>
  <div class="col">
    <div class="card mt-3 bg-primary text-white text-center" >
        <div class="card-header "><strong>TAGS</strong></div>
        <div class="card-body">
            <h1 class="px-3">{{ $categories_count}}</h1>
        </div>
    </div>
  </div>
  <div class="col">
    <div class="card mt-3 bg-danger text-white text-center" >
        <div class="card-header "><strong>TRASH POSTS</strong></div>
        <div class="card-body">
            <h1 class="px-3">{{ $trash_count }}</h1>
        </div>
    </div>
  </div>
  <div class="col">
    <div class="card mt-3 bg-success text-white text-center" >
        <div class="card-header "><strong>USER NUMBER</strong></div>
        <div class="card-body">
            <h1 class="px-3">{{ $user_count }}</h1>
        </div>
    </div>
  </div>
</div>
<div class="card text-white bg-dark my-3">
    <div class="card-header">
      Recent Post
    </div>
    <div class="card-body">
    <table class="table table-striped table-dark">
        <thead>
            <th width="10%">
                Image
            </th>
            <th width="40%">
                Title
            </th>
            <th>
              Create by
            </th>
            <th>
              Date add
            </th>
        </thead>
        <tbody>
          @if($posts->count() > 0)
            @foreach($posts as $post)
                <tr>
                    <td>
                    <img src="{{$post->featured}}" alt="{{$post->title}}" width="50px">
                    </td>
                    <td>
                    {{$post->title}}
                    </td>
                    <td>
                      {{ $post->user->name}}
                    </td>
                    <td>
                      {{ $post->created_at->toFormattedDateString() }}
                    </td>
                </tr>
              @endforeach
            @else
              <tr>
                <th colspan="4" class="text-center">No have posts</th>
              </tr>
            @endif
        </tbody>
    </table>
</div>
</div>
<div class="">
{{ $posts->links() }}
</div>
<br class="">
@endsection
