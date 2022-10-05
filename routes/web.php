<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;


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


Route::get('/home', [PagesController::class, 'index'])->name('home');

Route::get('/about', [PagesController::class, 'bio'])->name('about');

Route::get('/services', [PagesController::class, 'serve'])->name('services');

Route::get('/contact', [PagesController::class, 'address'])->name('contact');

Route::get('/team', [PagesController::class, 'group'])->name('team');

