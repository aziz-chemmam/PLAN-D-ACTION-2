<?php

use App\Http\Controllers\AnnoncesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReservationController;
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
Route::get('/registre', function () {
    return view('registre');
});


                //registre

Route::post('/welcome', [AuthController::class, 'registre'])->name('auth.register'); 
Route::post('/Home', [AuthController::class, 'login'])->name('auth.login');


                // seller annonce
Route::post('/seller',[AnnoncesController::class,'store']);
Route::get('/seller', [AnnoncesController::class, 'show'])->name('annonces.show');
Route::delete('/delete/{id}',[AnnoncesController::class,'delete']);
Route::get('/edit/{id}', [AnnoncesController::class,'edit'])->name('edit');
Route::post('/update/{id}', [AnnoncesController::class, 'update']);

                //client annonce 

Route::get('/offers',[AnnoncesController::class , 'clientShow']);
Route::get('/reservation',[ReservationController::class ,'show']);
Route::post('/reservation',[ReservationController::class ,'show']);



