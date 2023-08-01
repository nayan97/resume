<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\SumController;
use App\Http\Controllers\Admin\HobbyController;
use App\Http\Controllers\Admin\skillController;
use App\Http\Controllers\Admin\ThemeController;
use App\Http\Controllers\Admin\TraningController;
use App\Http\Controllers\Admin\personalController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminPageController;
use App\Http\Controllers\Admin\educationController;


//Route::get('/', function () {return view('admin.pages.login');});
Route::get('/',[HomeController::class, 'index']);

Route::get('/login',[AdminAuthController::class, 'login']) -> name('admin.login.page');
Route::post('/login',[AdminAuthController::class, 'adminLogin']) -> name('admin.login');

Route::get('/dashboard',[AdminPageController::class, 'showDashboard']) -> name('admin.dashboard.page');

Route::resource('/personal', personalController::class);
Route::resource('/education', educationController::class);
Route::resource('/skills', skillController::class);
Route::resource('/traning', TraningController::class);
Route::resource('/theme', ThemeController::class);
Route::resource('/summery', SumController::class);
Route::resource('/hobby', HobbyController::class);


