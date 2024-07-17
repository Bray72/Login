<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\Accountcontroller;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\dashboardcontroller;
use App\Http\Controllers\profilecontroller;
use App\Http\Controllers\admin\logincontroller as adminlogincontroller;
use App\Http\Controllers\admin\dashboardcontroller as admindashboardcontroller;


Route::get('/', function () {
    return view('welcome');
});
// guest middleware
route::group(['prefix'=>'account'],function(){
  route::group(['middleware'=>'guest'],function(){
    Route::get('/login',[logincontroller::class,'index'])->name('account.login');
    Route::get('/register',[logincontroller::class,'register'])->name('account.register');
    Route::post('/processregister',[logincontroller::class,'processregister'])->name('account.processregister');
    Route::post('/authenticate',[logincontroller::class,'authenticate'])->name('account.authenticate');
  });
// authenticate middlaware
  route::group(['middleware'=>'auth'],function(){
    Route::get('/logout',[logincontroller::class,'logout'])->name('account.logout');
    Route::get('/dashboard',[dashboardcontroller::class,'index'])->name('account.dashboard');
    Route::get('/profile',[profilecontroller::class,'profile'])->name('account.profile');
  });
});

// middleware admin
route::group(['prefix'=>'admin'],function(){
  route::group(['middleware'=>'admin.guest'],function(){
    Route::get('/login',[adminlogincontroller::class,'index'])->name('admin.login');
    Route::post('/authenticate',[adminlogincontroller::class,'authenticate'])->name('admin.authenticate');

  });
// authenticate middlaware
  route::group(['middleware'=>'admin.auth'],function(){
    Route::get('/logout',[adminlogincontroller::class,'logout'])->name('admin.logout');
    Route::get('/dashboard',[admindashboardcontroller::class,'index'])->name('admin.dashboard');
  });
});
Route::post('updateprofile',[AccountController::class,'updateprofile'])->name('account.updateprofile');
Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::resource('users', StudentController::class);


