<?php

use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum', 'verified'])->group(function () {
    Route::resource('/estudiantes', EstudianteController::class);
    Route::get('/dashboard', function(){
        return view('dashboard');
    })->name('dashboard');
    Route::resource('/user', UserController::class);
});
