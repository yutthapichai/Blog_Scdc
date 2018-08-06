@extends('layouts.app')

@section('content')
    <div class="card text-white bg-dark my-3">
        <div class="card-header">
          Tag
        </div>
        <div class="card-body">
        <table class="table table-striped table-dark">
            <thead>
                <th width="70%">
                    All tag name
                </th>
                <th>
                    Editing
                </th>
                <th>
                    Delete
                </th>
            </thead>
            <tbody>
              @if($tags->count() > 0)
                @foreach($tags as $tag)
                    <tr>
                        <td>
                        {{ $tag->tag }}
                        </td>
                        <td>
                            <a href="{{route('tag.edit', ['id' => $tag->id])}}" class="btn btn-sm btn-info">Edit</a>
                        </td>
                        <td>
                            <a href="{{route('tag.delete', ['id' => $tag->id])}}" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
              @else
                <tr>
                  <th colspan="3" class="text-center">No tags yet</th>
                </tr>
              @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
