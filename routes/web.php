<?php

use App\Http\Controllers\OrderController;
use App\Http\Middleware\UserControll;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/error', [UserController::class, 'error'])->name('error');

Route::get('/registration', [UserController::class, 'registrationView'])->name('reg');
Route::post('/registration', [UserController::class, 'registrationPost']);

Route::get('/authorizaton', [UserController::class, 'authorizationView'])->name('auth');
Route::post('/authorizaton', [UserController::class, 'authorizationPost']);

Route::get('/main', [UserController::class, 'mainView'])->name('/');



Route::middleware('UserControll')->group(function (){
    Route::get('/account', [UserController::class, 'accountView'])->name('acc');
    Route::post('/account', [UserController::class, 'accountPost']);

    Route::get('/logout', [UserController::class, 'logout'])->name('logout');

    Route::get('/create', [OrderController::class, 'add'])->name('add');
    Route::post('/create',[OrderController::class,'addPost']);

    Route::get('/delete/{order}',[OrderController::class,'deleteView'])->name('delete');
    Route::post('/delete/{order}',[OrderController::class,'deletePost']);

    Route::get('/update/{order}',[OrderController::class,'updateView'])->name('update');
    Route::post('/update/{order}',[OrderController::class,'updatePost']);

    Route::get('/admin',[OrderController::class,'adminView'])->name('admin')->middleware('AdminControll');
    Route::post('/admin',[OrderController::class,'adminPost'])->middleware('AdminControll');
});
