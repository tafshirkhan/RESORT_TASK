<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ResortController;


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

Route::get('/', function () {
    return view('welcome');
});

//ADMIN
Route::post('/admin/login',[AdminController::class,'AdminLogin'])->name('admin.login');

Route::prefix('admin')->group(function(){
    //ADD NEW ADMIN
    Route::get('/viewall/admins',[AdminController::class,'ViewAllAdmins'])->name('all.admins');
    Route::get('/add/admin',[AdminController::class,'AddNewAdmin'])->name('add.admin');
    Route::post('/store/admin',[AdminController::class,'StoreAdmin'])->name('admin.store');


    //RESORTS
    Route::get('/viewall/resorts',[ResortController::class,'ViewAllResorts'])->name('all.resorts');
    Route::get('/add/resort',[ResortController::class,'AddNewResort'])->name('add.resort');
});


