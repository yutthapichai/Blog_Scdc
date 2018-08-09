@extends('layouts.app')

@section('content')
    <div class="card text-white bg-dark my-3">
        <div class="card-header">
          Users
        </div>
        <div class="card-body">
        <table class="table table-striped table-dark">
            <thead>
                <th width="30%">
                    Image
                </th>
                <th width="40%">
                    name
                </th>
                <th>
                    Permissions
                </th>
                <th>
                    Delete
                </th>
            </thead>
            <tbody>
              @if($users->count() > 0)
                @foreach($users as $user)
                    <tr>
                        <td>
                          {{-- profile is function User model --}}
                        <img src="{{ asset('$user->profile->avatar') }}" alt="{{$user->name}}" width="50px" style="bordeer-radius:20%">
                        </td>
                        <td>
                        {{$user->name}}
                        </td>
                        <td>
                            @if($user->admin)
                              <a href="{{ route('user.not.admin',['id' => $user->id]) }}" class="btn btn-sm btn-danger">Remove permissions</a>
                            @else
                              <a href="{{ route('user.admin',['id' => $user->id]) }}" class="btn btn-sm btn-success">Make Admin</a>
                            @endif
                        </td>
                        <td>
                          @if(Auth::id() === $user->id || !$user->admin)
                            <a href="{{ route('user.delete', ['id' => $user->id]) }}" class="btn btn-sm btn-danger">Delete</a>
                          @endif
                        </td>
                    </tr>
                  @endforeach
                @else
                  <tr>
                    <th colspan="4" class="text-center">No have users</th>
                  </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
