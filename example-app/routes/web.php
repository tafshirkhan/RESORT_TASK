<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ResortController;
use App\Http\Controllers\FrontendIndexController;
use App\Http\Controllers\BookingController;


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

/*Route::get('admin/login', function () {
    return view('welcome');
    //return view('Frontend.index');
});*/

Route::get('/', function () {
    return view('Frontend.index');
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
    Route::post('/store/resort',[ResortController::class,'StoreResort'])->name('resort.store');
    Route::get('/inactive/{id}',[ResortController::class,'ResortInactive'])->name('resort.inactive');
    Route::get('/active/{id}',[ResortController::class,'ResortActive'])->name('resort.active');
    Route::get('/editresort/{id}',[ResortController::class,'EditResort'])->name('edit.resort');
    Route::get('/deleteresort/{id}',[ResortController::class,'DeleteResort'])->name('delete.resort');
    Route::post('/update/resort/{id}',[ResortController::class,'UpdateResort'])->name('update.resort');

    Route::get('/search',[ResortController::class,'SearchResort'])->name('search');


});

Route::get('/',[FrontendIndexController::class,'ViewIndexPage']);

//Frontend Resort Details Page 
Route::get('/resort/view_details/{id}',[FrontendIndexController::class,'ResorttDetails_info']);

////FOR CHECKING THE DATE////
Route::get('/checkdate',[FrontendIndexController::class,'CheckDate']);

//Route::get('/booking/process/{id}',[FrontendIndexController::class,'BookingProcess'])->name('booking_process');
Route::get('/booking/process/{id}',[BookingController::class,'BookingProcess'])->name('booking_process');

Route::post('/add/booking',[BookingController::class,'AddBooking'])->name('add_booking');





