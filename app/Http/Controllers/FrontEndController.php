<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Setting;
use App\Models\Tag;


class FrontEndController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $top_menu = Category::orderBy('created_at','ASC')->where('location','=', 1)->take(8)->get(); 
        $main_menu = Category::orderBy('created_at','ASC')->where('location','=', 2)->take(1)->get();
        $main_second = Category::orderBy('created_at','ASC')->where('location','=', 2)->skip(1)->take(1)->get();
        $main_third = Category::orderBy('created_at','ASC')->where('location','=', 2)->skip(2)->take(1)->get();
        $main_four = Category::find(6);
        $main_five = Category::find(3);
        $main_six = Category::find(4);
        $main_seven = Category::find(12);
        $logoImg    = Setting::first();
        $chobi    = Category::find(46);
        $footer_category = Category::orderBy('created_at','ASC')->where('location','=', 3)->take(14)->get();
        $posts      = Post::all();
        $first_posts = Post::orderBy('created_at', 'desc')->limit(45)->get();
        $second_posts = Post::orderBy('created_at', 'desc')->skip('12')->limit(4)->get();
        $today_news   = Post::inRandomOrder()->limit(3)->get();
        $today_second   = Post::inRandomOrder()->skip('12')->limit(3)->get();
        $today   = Post::inRandomOrder()->skip('12')->limit(1)->get();
        $todayOne   = Post::inRandomOrder()->limit(1)->get();
        $jonoprio = Post::orderBy('view', 'desc')->get();
        $recent =  Post::orderBy('created_at', 'desc')->get();

        return view('welcome',compact('recent','jonoprio','top_menu','posts','first_posts','second_posts','today_news','today_second','today','todayOne','footer_category','main_menu','main_second','main_third','main_four','main_five','main_six','main_seven','logoImg','chobi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function categoryPost($id)
    {
        $logoImg    = Setting::first();
        $top_menu = Category::orderBy('created_at','ASC')->where('location','=', 1)->take(8)->get(); 
        $posts      = Post::all();
        $category = Category::find($id);
        $footer_category = Category::orderBy('created_at','ASC')->where('location','=', 3)->get();

        return view('vendor.category',compact('logoImg','top_menu','posts','footer_category','category'));
    }
    public function tagPost($id)
    {
        $logoImg    = Setting::first();
        $top_menu = Category::orderBy('created_at','ASC')->where('location','=', 1)->take(8)->get(); 
        $posts      = Post::all();
        $tag = Tag::find($id);
        $footer_category = Category::orderBy('created_at','ASC')->where('location','=', 3)->get();

        return view('vendor.tag',compact('logoImg','top_menu','posts','footer_category','tag'));
    }

    public function singlePost($id,$slug){

        $post = Post::find($id);
        $view = $post->view ;
        $post->view = $view +1 ;
        $post->save();
    
        $top_menu = Category::orderBy('created_at','ASC')->where('location','=', 1)->take(8)->get(); 
        $logoImg    = Setting::first();
        $posts      = Post::all();

        $next_id = Post::where('id', '>', $post->id )->min('id');
        $next_post = Post::find($next_id);

        $prev_id = Post::where('id', '<', $post->id )->max('id');
        $prev_post = Post::find($prev_id);
        $footer_category = Category::orderBy('created_at','ASC')->where('location','=', 3)->get();
        $slider = Post::find($id);
        $jonoprio = Post::orderBy('view', 'desc')->get();
        $recent =  Post::orderBy('created_at', 'desc')->get();
      
         return view('vendor.single',compact('recent','jonoprio','slider','logoImg','top_menu','posts','next_id','prev_post','next_post','footer_category'));
  
      }

      public function searchPost(){
        $footer_category = Category::orderBy('created_at','ASC')->where('location','=', 3)->get();

        $search = request('query');
        $logoImg    = Setting::first();
        $posts = Post::where('title','like','%'.$search.'%')->get();

        $top_menu = Category::orderBy('created_at','ASC')->where('location','=', 1)->take(8)->get(); 
        return view('vendor.search',compact('search','logoImg','top_menu','posts','footer_category'));
      }


    
}
