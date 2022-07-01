<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('isStudent')->name('home');

Route::group(['prefix' => 'students'], function () {
	Route::get('/', [App\Http\Controllers\Admin\StudentController::class, 'show'])->name('student.show');
	Route::post('/store', [App\Http\Controllers\Admin\StudentController::class, 'store'])->name('student.store');
	Route::put('/{student_id}', [App\Http\Controllers\Admin\StudentsController::class, 'update'])->name('student.update');
	Route::any('/delete/{student_id}', [App\Http\Controllers\Admin\StudentsController::class, 'delete'])->name('student.destroy');
	Route::any('/delete/{user_id}', [App\Http\Controllers\Admin\StudentsController::class, 'delete_user'])->name('user.destroy');
});

Route::get('/get_user', [App\Http\Controllers\Admin\StudentController::class, 'get_current_user'])->name('get.user');

