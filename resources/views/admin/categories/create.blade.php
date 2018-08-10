@extends('layouts.app')

@section('content')
    @include('admin.includes.inputserrors')
    <div class="row">
      <div class="col-lg-6">
        <div class="card my-3 bg-dark text-white">
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
      </div>
    </div>
@stop
