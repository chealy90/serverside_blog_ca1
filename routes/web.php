<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\BlogPagesAllController;


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

Route::get('/', [PagesController::class, 'index']);

Route::resource('/blog', PostsController::class);

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/blogs', [\App\Http\Controllers\BlogPagesAllController::class, 'index'])->name('blog');
Route::get('/posts', [\App\Http\Controllers\PostController::class, 'index'])->name('blog.blogCard');
Route::get('/about', [\App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/blogs/{id}', [\App\Http\Controllers\BlogPostController::class, 'index'])->name('blogs/display');

Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index'])->name('contact');





    