<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;


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

Route::get('/', function () {
    return view('home', [
        "title" => "Home", 
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Amanda April Florencia",
        "email" => "aprilamanda490@gmail.com",
        "image" => "Amanda April Florencia.JPG"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);
//halaman sigle post
Route::get('posts/{slug}', [PostController::class, 'show']);