<?php
use Illuminate\Support\Facades\Auth;
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
// Route::resource('/Admin/Players/create', 'App\Http\Controllers\AdminPlayerController::class create');
 Route::get('/Admin/Players/create', [App\Http\Controllers\AdminPlayerController::class, 'create'])->name('admin.create');

Auth::routes();

 Route::get('/home', 'HomeController@index')->name('home');
 Route::get('/p/create', 'PostsController@create');
 Route::get('/p/{post}', 'PostsController@show');
 Route::post('/p', 'PostsController@store');
// Route::get('/home', 'PlayersProfileController@index')->name('home');
Route::get('/player-profile/{user}', 'PlayersProfileController@index')->name('profile.show');
Route::get('/player-profile/{user}/edit', 'PlayersProfileController@edit')->name('profile.edit');
Route::patch('/player-profile/{user}', 'PlayersProfileController@update')->name('profile.update');
