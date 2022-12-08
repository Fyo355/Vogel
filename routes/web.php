<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\User\Profile;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[App\Http\Controllers\PagesController::class, 'index'] );

Route::resource('/blog', App\Http\Controllers\PostsController::class);






/*Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

/blog/{{ $post->slug }}/edit
Route::get('blog/{{ $post->slug }}/{id}/edit', 'PostsController@edit');
Route::put('blog/{{ $post->slug }}/{id}', 'PostsController@update');
Route::patch('blog/{{ $post->slug }}/{id}', 'PostsController@update');

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('blog/{blog}/edit', 'App\Http\Controllers\PostsController@edit');
Route::put('blog/{blog}', 'App\Http\Controllers\PostsController@update')->name('blog.update');
Route::patch('blog/{blog}', 'App\Http\Controllers\PostsController@update')->name('blog.update');
*/

Route::prefix('admin')->name('admin.')->group(function (){
Route::resource('/users', UserController::class);
});




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::prefix('admin')->middleware(['auth', 'auth.isAdmin', 'verified'])->name('admin.')->group(function (){
    Route::resource('/users', UserController::class);

});

//Perfil de Usuario
Route::prefix('user')->middleware(['auth', 'verified'])->name('user.')->group(function (){
  Route::get('profile', \App\Http\Controllers\User\Profile::class)->name('profile');
});




// Authentication Routes...
Route::get('login', [
    'as' => 'login',
    'uses' => 'App\Http\Controllers\Auth\LoginController@showLoginForm'
  ]);
  Route::post('login', [
    'as' => '',
    'uses' => 'App\Http\Controllers\Auth\LoginController@login'
  ]);
  Route::post('logout', [
    'as' => 'logout',
    'uses' => 'App\Http\Controllers\Auth\LoginController@logout'
  ]);
  
require_once __DIR__. '/fortify.php';

 
  