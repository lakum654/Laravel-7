@extends('layouts.app')

@section('content')
<div class="container p-4" style="border-radius: 2px;">
<h3>Manage Posts</h3>
</div>
<div class="container bg-light">
   
    <table class="table table-sm table-hover table-active table-striped">
        <tr class="thead bg-dark text-white">
            <td>Post Id</td>
            <td>Posted By</td>
            <td>Title</td>
            <td>Posted On</td>
            <td>Delete</td>
            <td>Edit</td>
        </tr>
        @foreach($posts as $post)
         <tr class="tbody">
             <td>{{$post->id}}</td>
             <td>{{$post->name}}</td>
             <td>{{$post->title}}</td>
             <td>{{$post->created_at}}</td>
             <td><a href="" class="btn btn-danger btn-sm">Delete</a></td>
             <td><a href="#" class="btn btn-info btn-sm">Edit</a></td>
         </tr>
        @endforeach
    </table>
   {{$posts->links()}}
</div>
@endsection