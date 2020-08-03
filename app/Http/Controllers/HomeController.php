<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
       // $posts = Post::
       //          //where('name','a')
       //          orderBy('created_at','desc')
       //         //->take(2)
       //         ->get();
         $posts = Post::orderBy('created_at','desc')->paginate(2);
         //paginate(10);
        return view('home',['posts'=>$posts]);
    }

    public function handleAdmin()
    {
        return view('handleAdmin');
    }    
}

