<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Models\Idea;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

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
