<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     return view('home');
// });

// Post Routes //
Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard',[DashboardController::class,'show_post'])->name('dashboard');

Route::get('/post',[PostController::class,'index'])->name('post_index');
Route::post('/post',[PostController::class,'create']);
Route::get('/editpost/{id}',[PostController::class,'edit']);
Route::put('/editpost/{id}',[PostController::class,'update']);
Route::get('/delete/{id}',[PostController::class,'destroy']);
});

// Open Routes
Route::get('/',[HomeController::class,'show_all']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
