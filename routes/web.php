<?php

use App\Http\Controllers\MahasiswakuController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ByeController;

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

Route::get('/',function (){
    return view('home');
});

Route::resource('/mahasiswaku', MahasiswakuController::class);
 
// Route::get('/', [ByeController::class, 'home']);
// Route::post('/hasil', [ByeController::class, 'show']);


