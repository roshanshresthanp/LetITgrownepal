<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StrategyController;
use App\Http\Controllers\PageController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard',[HomeController::class, 'dashboard'])->name('dashboard');


//Strategic plan 
Route::get('/strategy/add',[StrategyController::class,'create']);
Route::post('/strategy/add',[StrategyController::class,'store']);
Route::delete('/strategy/{id}',[StrategyController::class,'delete']);



//Main routing

Route::get('/',[PageController::class,'home']);