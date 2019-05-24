<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth',['except' => ['index','show']]);
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $posts = Post::orderBy('created_at','desc')->paginate(10);
        return view('posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request;

        $this->validate( $request, [
                    'title' => 'required|unique:posts|string|min:5',
                    'body' => 'required|min:7|string',
                    'image' => 'image|nullable|max:1999',
              ]);

            

              $post = new Post;
              $post->title = $request->input('title');
              $post->body = $request->input('body');
              $post->user_id = Auth::id();
              $post->save();

        return redirect('posts')->with('hola','Post Created');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $post = Post::find($id);
      return view('posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        if(Auth::user()->id === $post->user_id){
        return view('posts.edit')->with('post',$post);
        }
        return redirect('/posts')->with('error', 'Cannot edit another person post');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
              $this->validate( $request, [
                          'title' => 'required|unique:posts|string|min:5',
                          'body' => 'required|min:30|string',

                    ]);

                    $post = Post::find($id);
                    $post->title = $request->input('title');
                    $post->body = $request->input('body');
                    $post->save();

              return redirect('posts')->with('hola','Post Created');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        if(Auth::user()->id === $post->user_id){
        return redirect('/posts')->with('error', 'Cannot delete another person post');
        }
        $post->delete();
        return redirect('/posts')->with('success' , 'Post deleted');
    }
}
