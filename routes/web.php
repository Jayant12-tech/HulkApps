<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\CommentsController;
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

//pages
Route::get('/', [PageController::class,'index'])->name('index');
Route::get('/about', [PageController::class,'about'])->name('about');
Route::get('/services', [PageController::class,'services']);
Route::get('/contact', [PageController::class,'contact']);
Route::get('/logout', [PageController::class,'logout']);
Route::get('/blog-details/{id}', [PageController::class,'blog_details'])->name('blogDetails');
Route::get('/blog-category/{name}', [PageController::class,'blog_category'])->name('blogCategory');

//profile
Route::get('/user-profile', [ProfileController::class,'index'])->name('profile');
Route::post('/update-user-profile', [ProfileController::class,'update_user_profile'])->name('update_user_profile');


//blogs
Route::get('/all-blogs', [BlogsController::class,'index'])->name('allBlogs');
Route::get('/new-blog', [BlogsController::class,'new_blog'])->name('newBlog');
Route::post('/add-blog', [BlogsController::class,'add_blog'])->name('addBlog');
Route::get('/edit-blog/{id}', [BlogsController::class,'edit_blog'])->name('editBlog');
Route::post('/update-blog/', [BlogsController::class,'update_blog'])->name('updateBlog');
Route::get('/delete-blog/{id}', [BlogsController::class,'delete_blog'])->name('deleteBlog');

//comment
Route::post('/add-comment', [CommentsController::class,'add_comment'])->name('addComment');
Route::post('/edit-comment', [CommentsController::class,'edit_comment'])->name('editComment');
Route::get('/delete-comment/{id}', [CommentsController::class,'delete_comment'])->name('deleteComment');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/home', function () {
        return view('welcome');
    })->name('welcome');
});

