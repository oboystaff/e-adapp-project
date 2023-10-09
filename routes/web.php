<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Farmer;
use App\Http\Controllers\User;


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

//USER MANAGEMENT
Route::get('/', [Auth\LoginController::class, 'index'])->name('auth.index');
Route::post('/login', [Auth\LoginController::class, 'login'])->name('auth.login');
Route::get('/logout', [Auth\LoginController::class, 'logout'])->name('auth.logout');
Route::get('/signup', [Auth\LoginController::class, 'signup'])->name('auth.signup');
Route::post('/signup', [Auth\LoginController::class, 'store'])->name('auth.store');

//DASHBOARD MANAGEMENT
Route::get('/dashboard', [Dashboard\DashboardController::class, 'index'])->name('dashboard.index');

//FARMER MANAGEMENT
Route::get('/farmers', [Farmer\FarmerController::class, 'index'])->name('farmers.index');
Route::get('/farmer/create', [Farmer\FarmerController::class, 'create'])->name('farmers.create');
Route::post('/farmer', [Farmer\FarmerController::class, 'store'])->name('farmers.store');
Route::get('/farmer/show/{farmer}', [Farmer\FarmerController::class, 'show'])->name('farmers.show');
Route::get('/farmer/edit/{farmer}', [Farmer\FarmerController::class, 'edit'])->name('farmers.edit');
Route::post('/farmer/update/{farmer}', [Farmer\FarmerController::class, 'update'])->name('farmers.update');

//USER MANAGEMENT
Route::get('/users', [User\UserController::class, 'index'])->name('users.index');
Route::get('/user/create', [User\UserController::class, 'create'])->name('users.create');
Route::post('/user', [User\UserController::class, 'store'])->name('users.store');
Route::get('/user/show/{user}', [User\UserController::class, 'show'])->name('users.show');
Route::get('/user/edit/{user}', [User\UserController::class, 'edit'])->name('users.edit');
Route::post('/user/update/{user}', [User\UserController::class, 'update'])->name('users.update');
