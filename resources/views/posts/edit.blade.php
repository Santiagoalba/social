@extends('layouts.app')

@section('content')
  <h1>Edit post</h1>
    <form class="" action="/posts/{{$post->id}}" method="post">
      @method('PUT')
      @csrf
      <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name="title" class="form-control" value="{{$post->title}}" placeholder="Title">
    </div>
    <div>
        @if ($errors->has('title'))
            <span>
                <strong style="color:red">{{ $errors->first('title') }}</strong>
            </span>
        @endif
      </div>
    <div>
      <label  for="title">Body</label>
      <input type="textarea" name="body" class="form-control" value="{{$post->body}}" placeholder="Body">
    </div>
    <div>
        @if ($errors->has('body'))
            <span>
                <strong style="color:red">{{ $errors->first('body') }}</strong>
            </span>
        @endif
      </div>

    <br>
    <button type="submit" class="btn btn-primary" name="button">Save</button>
    </form>

@endsection
