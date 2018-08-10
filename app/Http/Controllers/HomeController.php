<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Tag;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(10);
        return view('/home')
        ->with('post_count', Post::all()->count())
        ->with('trash_count', Post::onlyTrashed()->get()->count())
        ->with('user_count', User::all()->count())
        ->with('categories_count', Tag::all()->count())
        ->with('posts', $posts);;
    }
}
