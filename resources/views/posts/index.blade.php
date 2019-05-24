@extends('layouts.app')

@section('content')
  <h1>Posts</h1>

    @foreach ($posts as $post)
      <div class="jumbotron postdiv">


      <li>
        <a href="/posts/{{$post->id}}">{{$post->title}}</a>
        <br>
        <div class="text-center">
        {{$post->body}}
      </div>
      </li>
      <p>Post by {{$post->user->name}}</p>
      </div>

    @endforeach
    {{$posts->links()}}
@endsection
