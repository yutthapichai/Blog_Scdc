<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Category;
use App\Post;
use App\Tag;
class FrontEndController extends Controller
{
    public function index()
    {
      $id    = Category::select('id')->min('id');
      $id_2  = Category::select('id')->max('id');
      $id_3  = Category::whereNotIn('id',[$id,$id_2])->first();
      $check_data = Post::all()->count();
      if($check_data > 2){
        $three = Post::orderBy('created_at', 'desc')->skip(2)->take(1)->get()->first();
      }else{
        $three = '';
      }
      if($check_data > 1){
        $two = Post::orderBy('created_at', 'desc')->skip(1)->take(1)->get()->first();
      }else{
        $two = '';
      }
      if($check_data > 0){
        $one = Post::orderBy('created_at', 'desc')->first();
      }else{
        $one = '';
      }
      return view('index')
      ->with('title', Setting::first()->site_name)
      ->with('categories', Category::take(5)->get())
      ->with('first_post', $one)
      ->with('second_post', $two)
      ->with('three_post', $three)
      ->with('career', Category::find($id))
      ->with('tutor', Category::find($id_3->id))
      ->with('lession', Category::find($id_2))
      ->with('settings', Setting::first());
    }

    public function singlePost($slug)
    {
      $post = Post::where('id', $slug)->first();

      $next_id = Post::where('id', '>',$post->id)->min('id');
      $pre_id  = Post::where('id', '<', $post->id)->max('id');

      return view('single')->with('post', $post)
            ->with('title', $post->title)
            ->with('settings', Setting::first())
            ->with('categories', Category::take(5)->get())
            ->with('next', Post::find($next_id))
            ->with('prev', Post::find($pre_id))
            ->with('tags', Tag::all());
    }

    public function tag($id)
    {
      $tag = Tag::find($id);
      return view('tag')->with('tag', $tag)
                             ->with('title', $tag->tag)
                             ->with('settings', Setting::first())
                             ->with('categories', Category::take(5)->get());
    }

    public function category($id)
    {
      $category = Category::find($id);
      return view('category')->with('category', $category)
                             ->with('title', $category->name)
                             ->with('settings', Setting::first())
                             ->with('categories', Category::take(5)->get());
    }
}
