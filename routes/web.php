<?php

use App\Http\Controllers\userController;
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
    return view('accueil');
});

Route::get('/accueil', [userController::class,'accueil'])->name('Home');

Route::get('/login', [userController::class,'login'])->name('Connection');
Route::post('/login', [userController::class, 'handlelogin'])->name('login');

Route::get('/register',[userController::class,  'register'])->name('registration');
Route::post('/register',[userController::class,  'handleregistration'])->name('registration');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');