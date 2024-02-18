<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\PostController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/student1', function () {
    return view('student');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('/student', StudentController::class);

Route::get('/student2', [StudentController::class,'show']);

Route::resource('/post', PostController::class);

Route::get('post/ajax', [PostController::class,'index']);

Route::get('/post2', [PostController::class,'show']);

Route::resource('/grade', GradeController::class);

Route::get('/grade2', [GradeController::class,'show']);
