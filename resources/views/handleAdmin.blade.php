@extends('layouts.app')

@section('content')
<div class="container bg-dark text-white border-white p-2" style="border-radius: 2px;">
  <h3>Add New Post</h3> 
</div>
<div class="container bg-white">
  <form action="/newPost" method="POST" enctype="multipart/form-data">
    @csrf

        
    <label for="title">Title:</label>  
    <input type="text" name="title" placeholder="Post Title" class="form-control"><br>
    @error('title')   
    <div class="text-danger font-weight-bold">{{$message}}</div>
    @enderror

    <label for="text">Content:</label>
    <textarea name="text" class="form-control" placeholder="Add about post.."></textarea><br>
    @error('text')   
    <div class="text-danger font-weight-bold">{{$message}}</div>
    @enderror

    <label for="image"><div class="btn btn-info">Select image</div></label>
    <input type="file" name="image" id="image" class="d-none"><br>
    @error('image')   
    <div class="text-danger font-weight-bold">{{$message}}</div>
    @enderror
    
    <center><input type="submit" name="addPost" Value="New Post" class="btn btn-success w-50"><br></center><br>
  </form> 
@if(session()->get('success') != null)
<div class="alert alert-danger">
    {{ session()->get('success') }}
</div>
@endif
</div>
@endsection