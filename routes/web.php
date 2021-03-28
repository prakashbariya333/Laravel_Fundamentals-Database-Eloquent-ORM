<?php

use App\Http\Controllers\PostsController;
use App\Models\Country;
use App\Models\Photo;
use App\Models\Post;
use App\Models\Role;
use App\Models\Tag;
use App\Models\User;
use App\Models\Video;
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


Route::get("/post", [PostsController::class, 'index']);
Route::get("/contact", [PostsController::class, 'contact']);
Route::get("/post/{id}", [PostsController::class, 'show_post']);


Route::get('/read', function() {
    return  Post::all();
});

Route::get('/find', function() {
    return  Post::find(1);
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/{id}/post', function ($id) {
    return  User::find($id)->post;
});

Route::get('/user/{id}/posts', function ($id) {
    return  User::find($id)->posts;
});

Route::get('/post/{id}/user', function ($id) {
    return  Post::find($id)->user;
});

Route::get('/user/{id}/roles', function ($id) {
    return  User::find($id)->roles;
});

Route::get('/user/{id}/country', function ($id) {
    return  User::find($id)->country;
});

Route::get('/role/{id}/users', function ($id) {
    return  Role::find($id)->users;
});

Route::get('/country/{id}/posts', function ($id) {
    return  Country::find($id)->posts;
});


Route::get('/user/{id}/images', function ($id) {
    return  User::find($id)->images;
});

Route::get('/post/{id}/images', function ($id) {
    return  Post::find($id)->images;
});

Route::get('/photo/{id}/details', function ($id) {
    return  Photo::findOrFail($id)->imageable;
});

Route::get('/post/{id}/tags', function ($id) {
    return  Post::findOrFail($id)->tags;
});

Route::get('/video/{id}/tags', function ($id) {
    return  Video::findOrFail($id)->tags;
});

Route::get('/tag/{id}/posts', function ($id) {
    return  Tag::findOrFail($id)->posts;
});

Route::get('/tag/{id}/videos', function ($id) {
    return  Tag::findOrFail($id)->videos;
});
