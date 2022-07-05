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

Route::get('', function () {
    if (session()->has('userLogged')) {
        if (session()->get('userLogged') != null) {
        return redirect()->route('dashboard');
        }
        return redirect()->route('login');
        }
        return redirect()->route('login');
        });
Auth::routes();
Route::post('/login', 'AuthController@login');
Route::get('/not-found', 'HomeController@not_found')->name('notFound');
Route::group(['middleware' => 'isHaveToken'], function()
{
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
