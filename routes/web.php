<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

//las rutas deben ser en orden evaluadas en orden lineal

//por controlador. clase y metodo
//como el metodo __invoke solo tiene una funcion, no es necesario especificarlo
Route::get( '/',  [HomeController::class, '__invoke']);

Route::get( '/posts', function () {
    return 'aca se muestran los posts';
});

//crear rutas para los metodos HTTP
Route::get( '/posts/create',  function(){
    return 'Aqui se muestra el formulario para crear un post';
});


//valor opcional con el caracter ?
Route::get('/posts/{post}', function ($post) {
     return "Mostrando el post: {$post} ";
});



//get
//post
//put
//patch
//delete
//options
