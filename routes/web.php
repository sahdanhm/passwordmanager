<?php

use App\Http\Controllers\PasswordController;
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
    return view('home');
});
Route::get('/mypassword', function () {
    return view('mypassword');
});
Route::get('/mypassword/experiment', function () {
    return view('experiment');
});
Route::post('/savepassword', [PasswordController::class, 'insert']);
