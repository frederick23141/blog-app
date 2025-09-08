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
    //can use route model binding (implicit or explicit)
    //public function show(Post $post) //implicit and automatic search by id
    public function show(Post $post)
    {
        //compat('post); ['post' => $post]

        //retornar el contenido del post 
        //$post = Post::find($post);
        return view("posts.show", compact('post'));
    }

    //store new post
    public function store(Request $request)
    {
        //dd($request->all()); 
        /* return request->all(); */
        $post = new Post();

        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->categorie = $request->categorie;
        $post->content = $request->content;
        

        $post->save();

        return redirect()->route('posts.index');
    }

    //can use route model binding (implicit or explicit)
    //public function show(Post $post) //implicit and automatic search by id
    public function edit(Post $post)
    {
        /* $post = Post::find($post); */
        return view('posts.edit', compact('post'));
    }

    //can use route model binding (implicit or explicit)
    //public function show(Post $post) //implicit and automatic search by id
    public function update(Request $request, Post $post)
    {

        /*    $post = Post::find($post); */

        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->categorie = $request->categorie;
        $post->content = $request->content;

        $post->save();
        return redirect()->route('posts.show', $post);
    }

    //can use route model binding (implicit or explicit)
    //public function show(Post $post) //implicit and automatic search by id
    public function destroy(Post $post)
    {
        /* $post = Post::find($post); */
        $post->delete();
        return redirect()->route('posts.index');
    }
}
