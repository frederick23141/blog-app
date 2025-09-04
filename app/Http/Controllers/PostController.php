<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use function Pest\Laravel\post;

class PostController extends Controller
{
    public function index()
    {
        /* return view('posts.index');   cambiamos get. por paginate. */
        $posts = Post::orderBy('id', 'desc')->paginate(10);
        return view('posts.index', compact('posts'));
    }

    //create new post
    public function create()
    {
        return view('posts.create');
    }
    //show single post
    public function show($post)
    {
        //compat('post); ['post' => $post]

        //retornar el contenido del post 
        $post = Post::find($post);
        return view("posts.show", compact('post'));
    }
    //store new post
    public function store(Request $request)
    {
        //dd($request->all()); 
        /* return request->all(); */
        $post = new Post();

        $post->title = $request->title;
        $post->categorie = $request->categorie;
        $post->content = $request->content;

        $post->save();

        return redirect('/posts');
    }

    public function edit($post)
    {
        $post = Post::find($post);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $post)
    {

        $post = Post::find($post);

        $post->title = $request->title;
        $post->categorie = $request->categorie;
        $post->content = $request->content;

        $post->save();
        return redirect("posts/{$post->id}/edit");
    }

    public function destroy($post)
    {
        $post = Post::find($post);
        $post->delete();
        return redirect('/posts');
    }
}
