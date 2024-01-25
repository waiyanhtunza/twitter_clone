<?php

use App\Models\Idea;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::post('/', [DashboardController::class, 'index']);

Route::get('/terms', [DashboardController::class, 'terms'])->name('terms');

// Route::group(['prefix' => '', 'as' => 'ideas.'], function () {
//     Route::get('{idea}/show', [IdeaController::class, 'show'])->name('show');

//     Route::group(['middleware' => ['auth']], function () {
   
//         Route::post('/ideas', [IdeaController::class, 'store'])->name('store');

//         Route::delete('{idea}', [IdeaController::class, 'destroy'])->name('destroy');

//         Route::get('{idea}/edit', [IdeaController::class, 'edit'])->name('edit');

//         Route::put('{idea}', [IdeaController::class, 'update'])->name('update');

//         Route::post('{idea}/comments', [CommentController::class, 'store'])->name('comments.store');
//     });
// });

Route::resource('ideas', IdeaController::class)
    ->except('index', 'create', 'show')
    ->middleware('auth');

Route::resource('ideas', IdeaController::class)->only('show');

Route::resource('ideas.comments', CommentController::class)->only('store')->middleware('auth');

Route::resource('users',UserController::class)->only('show','edit','update')->middleware('auth');

Route::get('profile',[UserController::class,'profile'])->middleware('auth')->name('profile');
