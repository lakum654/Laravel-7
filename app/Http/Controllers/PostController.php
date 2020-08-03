<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response,File;
Use App\Post;
Use App\Admin;
class PostController extends Controller
{
    public function createPost(Request $request){

    	$request->validate([
    		'title'=>"required|string",
    		'text'=>"required|string|min:10|max:1000",
    		//'image'=>"required|mimes:jpg,png,jpeg,JPG,JPEG,PNG"
    	]);
    	
    	$admin = auth()->user()->name;	
      	$image = $request->file('image');
        $fileName = $image->getClientOriginalName();
        if($image->move(public_path('uploads'),$fileName))
        {
        	$post = new Post();
        	$post->name = $admin;
        	$post->title = $request->title;
        	$post->text = $request->text;
        	$post->image = $fileName;
        	$post->save();
        }
        $request->session()->flash('success',"New Post Created Successfully...");
        return back();     
    }
    public function allPost(){
        $posts = Post::orderBy('created_at','desc')->paginate(5);
        return view('all',['posts'=>$posts]);
    }
}
