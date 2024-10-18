<?php

use App\Http\Controllers\AdminController;
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
    return view('/admin/pages/login');
}); // ini logikanya kalau tidak ada route yang diakses maka akan menampilkan dashboard secara langsung 

Route::get('/dashboard', [AdminController::class, 'dashboard']) ; // didalam adalah tempat dimana websitenya
Route::get('/admin/pages/register', [AdminController:: class,'register']) ;
Route::get('/admin/pages/login', [AdminController::class,'login']) ;
Route::get('/admin/pages/contact', [AdminController::class,'contact']) ;