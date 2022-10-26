<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\dashboard;


Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth'])->group(function(){
    Route::get('/post',[PostController::class,'index'])->name('post_index');
    Route::get('/dashboard',[dashboard::class,'show_post'])->name('dashboard');
    Route::get('/edit/{id}',[PostController::class,'edit'])->name('editpost');
    Route::get('/delete/{id}',[PostController::class,'destroy']);
    Route::post('/create_post',[PostController::class,'create']);
    Route::post('/create_post/{id}',[PostController::class,'editpost']);

});





require __DIR__.'/auth.php';
