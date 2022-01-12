<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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

// for contacts
Route::resource('/contact', ContactController::class);

//Route::get('contact/create', [ ContactController::class, 'create' ]);

//Route::post('contact/create', [ ContactController::class, 'store' ]);
Route::get('/search', [App\Http\Controllers\ContactController::class, 'Search' ]);

// auth route for both
Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});

// for user
Route::group(['middleware' => ['auth', 'role:user']], function () {
    Route::get('/dashboard/myprofile', 'App\Http\Controllers\DashboardController@myprofile')->name('dashboard.myprofile');
});

require __DIR__.'/auth.php';
