<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdeaController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[DashboardController::class,'index'])->name('dashboard');

Route::get('/terms',[DashboardController::class,'terms'])->name('ideas.terms');

Route::post('/ideas',[IdeaController::class,'store'])->name('ideas.store');

Route::delete('/ideas/{idea}',[IdeaController::class,'destroy'])->name('ideas.destroy');

Route::get('/ideas/{idea}/edit',[IdeaController::class,'edit'])->name('ideas.edit');

Route::put('/ideas/{idea}',[IdeaController::class,'update'])->name('ideas.update');

Route::get('/ideas/{idea}/show',[IdeaController::class,'show'])->name('ideas.show');

Route::post('/ideas/{idea}/comments',[CommentController::class,'store'])->name('ideas.comments.store');




