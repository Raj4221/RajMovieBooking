<?php

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
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/book/{id?}', function () {
    return view('Book');
});

Route::get("/viewactordetail/{id?}","App\\Http\\Controllers\\LoginController@viewactordetail");
Route::get("/theatre_delete/{id?}","App\\Http\\Controllers\\LoginController@theatredelete");
Route::get("/edit_theatre/{id?}","App\\Http\\Controllers\\LoginController@viewtheatredetail");
Route::post("/update_theatre/{id?}","App\\Http\\Controllers\\LoginController@updatetheatredetail");
Route::get("/actor_delete/{id?}","App\\Http\\Controllers\\LoginController@actordelete");
Route::get("/viewactor","App\\Http\\Controllers\\ActorController@index");
Route::get("/viewtheatre","App\\Http\\Controllers\\LoginController@viewtheatre");
Route::get("/theatres/{id?}","App\\Http\\Controllers\\TheatreController@viewtheatre");
Route::get("/view_movie_detail/{id?}","App\\Http\\Controllers\\LoginController@viewmoviedetail");
Route::get("/viewmovies","App\\Http\\Controllers\\LoginController@viewmovie");
Route::get('/ticket/{id?}',"App\\Http\\Controllers\\LoginController@view");
Route::get("/logout","App\\Http\\Controllers\\LoginController@logout");
Route::get("/insert","App\\Http\\Controllers\\MovieController@create");
Route::post("/login","App\\Http\\Controllers\\LoginController@login");
// Route::post("/theatre/{id}","App\\Http\\Controllers\\TheatreController@create");
Route::resource("movie","App\Http\Controllers\MovieController");
Route::resource("member","App\Http\Controllers\MemberController");
Route::resource("theatre","App\Http\Controllers\TheatreController");
Route::resource("actor","App\Http\Controllers\ActorController");
Route::resource("booking","App\Http\Controllers\BookingController");
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
