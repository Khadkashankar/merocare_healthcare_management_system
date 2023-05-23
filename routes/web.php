<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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
    return view('dashboard');
});
// Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'redirect'])->middleware('auth','verified');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/add_doctor_view',[AdminController::class,'addView']);
Route::get('/showappointment',[AdminController::class,'showAppointment']);
Route::get('/approved/{id}',[AdminController::class,'approved']);
Route::get('/cancelled/{id}',[AdminController::class,'cancelled']);
Route::post('/upload_doctor',[AdminController::class,'upload']);
Route::get('/editdoctor',[AdminController::class,'editdoctor']);
Route::get('/delete/{id}',[AdminController::class,'delete']);
Route::get('/updatedoctor/{id}',[AdminController::class,'updatedoctor']);
Route::post('/addDetail/{id}',[AdminController::class,'addDetail']);

Route::post('/appointment',[HomeController::class,'appointment']);
Route::get('/myappointment',[HomeController::class,'myAppointment']);
Route::get('/cancel_appoint/{id}',[HomeController::class,'cancel_appoint']);

