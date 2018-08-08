@extends('layouts.app')

@section('content')
    @include('admin.includes.inputserrors')
    <div class="card bg-dark text-white my-3">
        <div class="card-header">
            Update your profile
        </div>
        <div class="card-body">
            <form action="{{route('user.profile.update')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field()}}
                <div class="form-group">
                    <lebel for="name">Name</lebel>
                    <input type="text" id="name" name="name" value="{{$user->name}}" class="form-control">
                </div>
                <div class="form-group">
                    <lebel for="avatar">Featured image</lebel>
                    <input type="file" id="avatar" name="avatar" class="form-control">
                </div>
                <div class="form-group">
                    <lebel for="email">Email</lebel>
                    <input type="email" id="email" value="{{$user->email}}" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <lebel for="password">Password</lebel>
                    <input type="password" id="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <lebel for="facebook">Facebook</lebel>{{-- model user * function profile * facebook colume --}}
                    <input type="text" id="facebook" value="{{$user->profile->facebook}}" name="facebook" class="form-control">
                </div>
                <div class="form-group">
                    <lebel for="youtube">Youtube</lebel>
                    <input type="text" id="youtube" value="{{$user->profile->youtube}}" name="youtube" class="form-control">
                </div>
                <div class="form-control">
                  <label for="about"></label>
                  <textarea name="about" id="about" rows="7" class="form-control">{{ $user->profile->about }}</textarea>
                </div>
                <div class="form-group mt-3">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Update Profile</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
