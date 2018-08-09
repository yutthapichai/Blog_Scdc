<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Category;
use App\Post;
class FrontEndController extends Controller
{
    public function index()
    {
      return view('index')
      ->with('title', Setting::first()->site_name)
      ->with('categories', Category::take(5)->get())
      ->with('first_post', Post::orderBy('created_at', 'desc')->first())
      ->with('second_post', Post::orderBy('created_at', 'desc')->skip(1)->take(1)->get()->first())
      ->with('three_post', Post::orderBy('created_at', 'desc')->skip(2)->take(1)->get()->first())
      ->with('career', Category::find(5))
      ->with('tutor', Category::find(6))
      ->with('lession', Category::find(2))
      ->with('settings', Setting::first());
    }

    public function singlePost($slug)
    {
      $post = Post::where('slug', $slug)->first();

      $next_id = Post::where('id', '>',$post->id)->min('id');
      $pre_id  = Post::where('id', '<', $post->id)->max('id');

      return view('single')->with('post', $post)
            ->with('title', $post->title)
            ->with('settings', Setting::first())
            ->with('categories', Category::take(5)->get())
            ->with('next', Post::find($next_id))
            ->with('prev', Post::find($pre_id));
    }
}
