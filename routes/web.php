<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

//las rutas deben ser en orden evaluadas en orden lineal

//por controlador. clase y metodo
//como el metodo __invoke solo tiene una funcion, no es necesario especificarlo
Route::get('/',  [HomeController::class, '__invoke']);

/* //Route::get('/',  HomeController::class);
//Route whit name ->name('name.dir')
Route::get('/posts', [PostController::class, 'index']) ->name('posts.index');

//crear rutas para los metodos HTTP
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

//para guardar un post - metodo post
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

//para actualizar un post - metodo put o patch
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');

Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');

Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

//valor opcional con el caracter ?
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
 */


//route whit resource , call to resource  to create crud routes from controller, this line replace all routes for posts and is more scalable and is comented the other routes for posts
Route::resource('posts', PostController::class);
// can be used with except ->except('destroy') or ->except(['destroy','index'])
//Route::resource('posts', PostController::class)->except(['destroy']);
//can be used with name for scalability
//Route::resource('posts', PostController::class)->names('articules');


//route whit apiresource
/* Route::apiResource('posts', PostController::class); */



//get
//post
//put
//patch
//delete
//options
