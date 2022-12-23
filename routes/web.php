<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\ExamController;



use App\Models\Users;

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
    // return view('welcome');
    return view('/auth/login');
});

Route::get('/login', function () {
    return view('/auth/login');
})->middleware('isLoggedIn');
Route::get('/register', function () {
    return view('/auth/register');
})->middleware('isLoggedIn');
Route::get('/recover-password', function () {
    return view('/auth/recoverpassword');
})->middleware('isLoggedIn');

// Route::get('/sites', function () {
//     return view('/pages/sites');
// });
Route::post('login-verify', [LoginController::class,'verify'])->name('login-verify');
Route::get('/logout', [LoginController::class,'logout'])->name('logout');




Route::resource('/login', LoginController::class);

Route::resource('/users', UsersController::class)->middleware('isLoggedIn');
Route::post('/users/store', [UsersController::class,'store'])->middleware('isLoggedIn');
Route::get('/users/edit/{id}', [UsersController::class,'edit'])->middleware('isLoggedIn');
Route::put('/users/update/{id}', [UsersController::class,'update'])->middleware('isLoggedIn');
Route::get('/users/destroy/{id}', [UsersController::class,'destroy'])->middleware('isLoggedIn');


Route::resource('/create-quiz', QuizController::class)->middleware('isLoggedIn');
Route::post('/create-quiz/store', [QuizController::class,'store'])->middleware('isLoggedIn');
Route::get('/create-quiz/edit/{id}', [QuizController::class,'edit'])->middleware('isLoggedIn');
Route::put('/create-quiz/update/{id}', [QuizController::class,'update'])->middleware('isLoggedIn');
Route::get('/create-quiz/destroy/{id}', [QuizController::class,'destroy'])->middleware('isLoggedIn');


Route::resource('/result', ResultController::class)->middleware('isLoggedIn');
Route::post('/result/store', [ResultController::class,'store'])->middleware('isLoggedIn');
Route::get('/result/edit/{id}', [ResultController::class,'edit'])->middleware('isLoggedIn');
Route::put('/result/update/{id}', [ResultController::class,'update'])->middleware('isLoggedIn');
Route::get('/result/destroy/{id}', [ResultController::class,'destroy'])->middleware('isLoggedIn');

Route::resource('/quiz', ExamController::class)->middleware('isLoggedIn');
Route::post('/quiz/store', [ExamController::class,'store'])->middleware('isLoggedIn');
Route::get('/quiz/edit/{id}', [ExamController::class,'edit'])->middleware('isLoggedIn');
Route::put('/quiz/update/{id}', [ExamController::class,'update'])->middleware('isLoggedIn');
Route::get('/quiz/destroy/{id}', [ExamController::class,'destroy'])->middleware('isLoggedIn');



