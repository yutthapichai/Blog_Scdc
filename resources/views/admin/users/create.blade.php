@extends('layouts.app')

@section('content')
    @include('admin.includes.inputserrors')
    <div class="card bg-dark text-white my-3">
        <div class="card-header">
            Create a new User
        </div>
        <div class="card-body">
            <form action="{{route('user.store')}}" method="post">
                {{ csrf_field()}}
                <div class="form-group">
                    <lebel for="name">Name</lebel>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <lebel for="email">Email</lebel>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Add user</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
