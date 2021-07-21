<?php

use App\Http\Controllers\ReplyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThreadController;


Route::get('/', function () {
    return view('welcome');
});


Route::resource('threads', ThreadController::class)->except('show');
Route::post('threads/{channel}/{thread}/replies', [ReplyController::class, 'store']);
Route::get('threads/{channel}/{thread}', [ThreadController::class, 'show'])->name('threads.show');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
