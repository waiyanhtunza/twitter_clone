<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/terms', [DashboardController::class, 'terms'])->name('terms');

Route::group(['prefix'=>'','as'=>'ideas.'], function () {
    Route::post('/ideas', [IdeaController::class, 'store'])
        ->name('store')
        ->middleware('auth');

    Route::delete('{idea}', [IdeaController::class, 'destroy'])
        ->name('destroy')
        ->middleware('auth');

    Route::get('{idea}/edit', [IdeaController::class, 'edit'])
        ->name('edit')
        ->middleware('auth');

    Route::put('{idea}', [IdeaController::class, 'update'])
        ->name('update')
        ->middleware('auth');

    Route::get('{idea}/show', [IdeaController::class, 'show'])->name('show');

    Route::post('{idea}/comments', [CommentController::class, 'store'])
        ->name('comments.store')
        ->middleware('auth');
});
