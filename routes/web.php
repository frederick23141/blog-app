<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\Post;

//las rutas deben ser en orden evaluadas en orden lineal

//por controlador. clase y metodo
//como el metodo __invoke solo tiene una funcion, no es necesario especificarlo
Route::get('/',  [HomeController::class, '__invoke']);

Route::get('/posts', function () {
    return 'aca se muestran los posts';
});

//crear rutas para los metodos HTTP
Route::get('/posts/create',  function () {
    return 'Aqui se muestra el formulario para crear un post';
});


//valor opcional con el caracter ?
Route::get('/posts/{post}', function ($post) {
    return "Mostrando el post: {$post} ";
});

Route::get('/prueba', function () {
    $post = new Post;

    //CREAR UN REGISTRO

    //$post->title = 'Titulo e prueba 5';
    //$post->content = 'Contenido del post 5';
    //$post->categorie = 'Categoria del post 5';
    //$post->save();


    //Buscar un registro por id

    //$post = Post::find(2);

    //Buscar un registro por campo especifico PARA ACTUALIZAR

    //$post = Post::where('title', 'Titulo e prueba 1')->first();
    //$post->categorie = 'Categoria actualizada del post 2';
    //$post->save();
    //return $post;

    //BUSCAR VARIOS REGISTROS
    //$post = Post::all();


    //buscar por algunos criterios
    $post = Post::where('id','>=' ,'1')
    ->orderBy('id','desc')
    ->select('id','title','categorie')
    ->get();

    //ELIMINAR UN REGISTRO
    //$post = Post::find(3);
    //$post->delete();

    return $post;

});



//get
//post
//put
//patch
//delete
//options
