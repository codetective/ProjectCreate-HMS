<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Models\User;

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
Route::get('/', [UserController::class, 'index']);

// Route::middleware(['auth:sanctum', 'verified'])->get('/Patientrecord',[UserController::class,'patientrecord' ])->name('Patientrecord');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard',[UserController::class,'dashboard' ])->name('dashboard');

// Route::middleware(['auth:sanctum', 'verified', 'admin'])->get('/register', function () {
//     return view('register');

// })->name('register');
Route::middleware(['auth:sanctum', 'verified', 'admin'])->post('/register',[UserController::class, 'create'])->name('register');
Route::middleware(['auth:sanctum', 'verified', 'admin'])->post('/patients',[UserController::class, 'createpatients'])->name('patients');
// Route::middleware(['auth:sanctum', 'verified'])->post('/register',[UserController::class, 'create'])->name('register');

Route::middleware(['auth:sanctum', 'verified'])->get('/role-edit/{id}',[UserController::class, 'edit'])->name('role-edit');

Route::middleware(['auth:sanctum', 'verified'])->put('/update-user/{id}',[UserController::class, 'update'])->name('update-user');

Route::middleware(['auth:sanctum', 'verified'])->delete('/delete-user/{id}',[UserController::class, 'delete'])->name('delete-user');


// Route::post('/patients','RecordsModelController@createpatients' );