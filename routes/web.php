<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', [BlogController::class, 'homepage'])->name('homepage');
Route::get('/about', [BlogController::class, 'about'])->name('about');
Route::get('/team', [BlogController::class, 'team'])->name('team');
Route::get('/contact',[ContactController::class, 'index'])->name('contact');
Route::get('/news',[NewsController::class, 'news'])->name('news');
Route::post('processing_contact',[ContactController::class, 'store'])->name('processing-contact');
Route::post('/membership',[BlogController::class, 'membership'])->name('membership');
Route::post('/processing-news',[NewsController::class, 'processing_news'])->name('processing_news');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
