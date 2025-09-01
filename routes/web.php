<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

//las rutas deben ser en orden evaluadas en orden lineal

//por controlador. clase y metodo
Route::get(uri: '/', action: [HomeController::class, 'index']);

Route::get(uri: '/posts', action: function () {
    return 'aca se muestran los posts';
});

//crear rutas para los metodos HTTP
Route::get(uri: '/posts/create', action: function(){
    return 'Aqui se muestra el formulario para crear un post';
});


//valor opcional con el caracter ?
Route::get(uri: '/posts/{post}', action: function ($post) {
     return "Mostrando el post: {$post} ";
});



//get
//post
//put
//patch
//delete
//options
