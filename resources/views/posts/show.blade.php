@extends('layouts.app')

@section('content')
  <h1>Post {{$post->id}}</h1>

      <div class="jumbotron postdiv">

      <li>
        <a href="/posts/{{$post->id}}">{{$post->title}}</a>
        <br>
        <div class="text-center">
        {{$post->body}}
      </div>
      </li>
      </div>
      <div class="row">


      <div class="d-flex col-10">
      Sent at {{$post->created_at}} <a href="/posts" class="btn btn-primary">Back to blog</a>
    </div>
    <div class="col-2 d-flex">
    @if ($post->user_id === Auth::user()->id)
      <a href="/posts/{{$post->id}}/edit" class="btn btn-success ml-1">Edit</a>
      <form class="" action="{{$post->id}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger mr-auto ">Delete</button>
      </form>
    @endif
  </div>
    </div>
@endsection
