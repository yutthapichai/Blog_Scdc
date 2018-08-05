@extends('layouts.app')

@section('content')
    <div class="card text-white bg-dark my-3">
        <div class="card-body">
        <table class="table table-striped table-dark">
            <thead>
                <th width="70%">
                    Category
                </th>
                <th>
                    Editing
                </th>
                <th>    
                    Delete
                </th>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>
                        {{$category->name}}
                        </td>
                        <td>
                            <a href="{{route('category.edit', ['id' => $category->id])}}" class="btn btn-sm btn-info">Edit</a>
                        </td>
                        <td>
                            <a href="{{route('category.delete', ['id' => $category->id])}}" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection