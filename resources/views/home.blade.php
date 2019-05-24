@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
                <table class="table table-striped">
                  <tr>
                    <td>Title</td>
                    <td></td>
                    <td></td>
                  </tr>
                  <br>
                  @foreach ($posts as $post)

                    <tr>
                      <th>{{$post->title}}</th>
                      <th><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Editar</th>
                      <th>
                        <form class="" action="posts/{{$post->id}}" method="post">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger">Delete</button>
                        </form>


                      </th>
                    </tr>
                  @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
