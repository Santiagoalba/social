@extends('layouts.app')

@section('content')
  <h1>Create post</h1>
    <form class="" action="/posts" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" placeholder="Title">
      </div>
      <div>
        @if ($errors->has('title'))
            <span>
                <strong style="color:red">{{ $errors->first('title') }}</strong>
            </span>
        @endif
      </div>
      <div>
        <label for="title">Body</label>
        <input type="textarea" name="body" class="form-control" placeholder="Body">
      </div>
      <div>
        @if ($errors->has('body'))
          @foreach ($errors->all() as $message)
                <strong style="color:red">{{ $message }}</strong>
          @endforeach
            {{-- <span>
                <strong style="color:red">{{ $errors->first('body') }}</strong>
            </span> --}}
        @endif
      </div>
      <div class="form-group">
        <label for="image">Imagen</label>
        <input type="file" name="image" class="form-control" placeholder="Image">
      </div>
      <div>
        @if ($errors->has('image'))
            <span>
                <strong style="color:red">{{ $errors->first('title') }}</strong>
            </span>
        @endif
      </div>
      <br>
      <button type="submit" class="btn btn-primary" name="button">Save</button>
    </form>

@endsection
