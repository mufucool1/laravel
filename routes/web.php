<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\YourController;
use App\Http\Controllers\UserController;

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
    //return view('welcome');
    return view('auth/login');
    //return view('home');
	//return 'Welcome to Laravel';
});

//Route::get('/your-route', [YourController::class, 'yourMethod']);

//Route::get('/get-path', [UserController::class, 'showPath']);

/*Route::get('/get-path',[
   'middleware' => 'First',
   'uses' => 'UserController@showPath'
]);*/

//Route::get('/mail', [App\Http\Controllers\MailController::class, 'basic_email']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/home', [App\Http\Controllers\ProfilesController::class, 'index'])->name('home');

Route::get('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'index'])->name('home');
