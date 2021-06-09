<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StrategyController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\GalleryController;


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


//Notice 
Route::get('/notice/add',[NoticeController::class,'create']);
Route::post('/notice/add',[NoticeController::class,'store']);
Route::delete('/notice/{id}',[NoticeController::class,'delete']);
Route::get('/notice/{id}/edit',[NoticeController::class,'edit']);
Route::put('/notice/{id}',[NoticeController::class,'update']);


//gallery
Route::get('/gallery/add',[GalleryController::class,'create']);
Route::post('/gallery/add',[GalleryController::class,'store']);
Route::delete('/gallery/{id}',[GalleryController::class,'delete']);
//Main routing

Route::get('/',[PageController::class,'home']);

Route::get('/datatable',[PageController::class,'datatable'])->name('pages.datatable');

//