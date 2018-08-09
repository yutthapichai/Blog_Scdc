@extends('layouts.app')

@section('content')
    @include('admin.includes.inputserrors')
    <div class="card bg-dark text-white my-3">
        <div class="card-header">
            Edit blog settings
        </div>
        <div class="card-body">
            <form action="{{route('setting.update')}}" method="post">
                {{ csrf_field()}}
                <div class="form-group">
                    <lebel for="site_name">Site name</lebel>
                    <input type="text" name="site_name" value="{{ $setting->site_name }}" class="form-control">
                </div>
                <div class="form-group">
                    <lebel for="address">Address</lebel>
                    <input type="text" name="address" value="{{ $setting->address}}" class="form-control">
                </div>
                <div class="form-group">
                    <lebel for="contact_number">Contact number</lebel>
                    <input type="text" name="contact_number" value="{{ $setting->contact_number}}" class="form-control">
                </div>
                <div class="form-group">
                    <lebel for="contact_email">Contact Email</lebel>
                    <input type="text" name="contact_email" value="{{ $setting->contact_email}}" class="form-control">
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Update site settings</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
