<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;


Route::get('/',[DashboardController::class,'index'])->name('dashboard');

Route::get('/terms',[DashboardController::class,'terms'])->name('ideas.terms');

Route::post('/ideas',[IdeaController::class,'store'])->name('ideas.store')->middleware('auth');

Route::delete('/ideas/{idea}',[IdeaController::class,'destroy'])->name('ideas.destroy')->middleware('auth');

Route::get('/ideas/{idea}/edit',[IdeaController::class,'edit'])->name('ideas.edit')->middleware('auth');

Route::put('/ideas/{idea}',[IdeaController::class,'update'])->name('ideas.update')->middleware('auth');

Route::get('/ideas/{idea}/show',[IdeaController::class,'show'])->name('ideas.show');

Route::post('/ideas/{idea}/comments',[CommentController::class,'store'])->name('ideas.comments.store')->middleware('auth');





Route::get('/register',[AuthController::class,'register'])->name('register');
 
Route::post('/register',[AuthController::class,'store']);

Route::get('/login',[AuthController::class,'login'])->name('login');
 
Route::post('/login',[AuthController::class,'authentication']);

Route::post('/logout',[AuthController::class,'logout'])->name('logout');




