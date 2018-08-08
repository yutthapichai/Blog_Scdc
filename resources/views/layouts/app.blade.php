<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <script src="https://unpkg.com/feather-icons"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="{{ route('user.profile') }}">
                                        My Profile
                                    </a>

                                    {{-- Model Auth Table user pionter at colume yourself admin --}}
                                    @if(Auth::user()->admin)
                                    <a class="dropdown-item" href="{{ route('user.create') }}">
                                        Create user
                                    </a>
                                    <a class="dropdown-item" href="{{ route('users') }}">
                                        All users
                                    </a>
                                    @endif

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid ">
            <div class="row">
                @if(Auth::check())
                <div class="col-lg-3">
                    <div class="list-group mt-3">
                        <a href="{{route('home')}}"
                        class="list-group-item list-group-item-action list-group-item-dark">
                        <i data-feather="home"></i> Home</a>

                        <a href="{{route('category.create')}}"
                        class="list-group-item list-group-item-action list-group-item-dark">
                        <i data-feather="aperture"></i> Create a category</a>

                        <a href="{{route('post.create')}}"
                        class="list-group-item list-group-item-action list-group-item-dark">
                        <i data-feather="send"></i> Cteate a post</a>

                        <a class="list-group-item list-group-item-action list-group-item-dark"
                        href="{{route('tag.create')}}">
                        <i data-feather="tag"></i> Create Tag</a>

                        <a class="list-group-item list-group-item-action list-group-item-dark"
                        href="{{route('categories')}}">
                        <i data-feather="package"></i> All Category</a>

                        <a class="list-group-item list-group-item-action list-group-item-dark"
                        href="{{route('posts')}}">
                        <i data-feather="message-square"></i> All Posts</a>

                        <a class="list-group-item list-group-item-action list-group-item-dark"
                        href="{{route('posts.trashed')}}">
                        <i data-feather="trash-2"></i> All trashed posts</a>

                        <a class="list-group-item list-group-item-action list-group-item-dark"
                        href="{{route('tags')}}">
                        <i data-feather="bookmark"></i> All Tag</a>

                    </div>
                </div>
                @else
                <div class="col-lg-1">

                </div>
                @endif
                <main class="col-lg-9">
                    @include('admin.includes.sessionerrors')
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
    <script>
        feather.replace();
    </script>
</body>
</html>
