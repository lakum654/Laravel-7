@extends('layouts.app')

@section('content')
<div class="container bg-dark text-white font-weight-bold p-2" style="border-radius: 2px;">
<h3>Published Post</h3>
</div>
<div class="container-fluid bg-light">
    @foreach($posts as $post)
    <div class="container bg-white w-50">
    <div class="username">
    <a>Posted By  : {{$post->name}}</a> 
    <a>Posted On : {{$post->created_at }}</a>
    </div>
    <div clas="post-image">
    <center><img src="{{asset('uploads')}}/{{ $post->image}}" width="300px" height="300px"></center>    
    </div>
    <div class="post-details">
        <p>{{$post->text}}</p>
    </div>
    </div><br>
    @endforeach    
 <center>{{ $posts->links() }}</center>
</div>
@endsection