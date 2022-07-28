<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\GlobalSettingController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomePageSliderController;
use App\Http\Controllers\firebaseiot;



/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [HomeController::class, 'index']);

Route::prefix('admin')->group(function() {
    // Route::middleware('auth:admin')->group(function() {
        Route::group(['middleware' =>['is_admin']], function () {
        Route::get('/', [DashboardController::class , 'index']);


        //setting 
        Route::get('/setting', [SettingController::class , 'setting'])->name('admin.setting');
        Route::post('/store/globalsetting', [GlobalSettingController::class , 'StoreGlobalSetting'])->name('admin.store.global.setting');

        //Profile 
        Route::get('/profile', [HomeController::class , 'GetUser'])->name('admin.Get.user');
        Route::post('/profile/update', [HomeController::class, 'UserUpdate'])->name('admin.update.user');
        Route::post('/profile/update/password', [HomeController::class, 'UserUpdatePassword'])->name('admin.update.user.password');

        //firebaseiot
        Route::get('/fetchdht', [firebaseiot::class, 'fetchdht']);
        Route::get('/fetchMoistureSensor', [firebaseiot::class, 'fetchMoistureSensor']);
        Route::get('/fetchrdsensor', [firebaseiot::class, 'fetchrdsensor']);
        
        Route::get('/fetchbulbs', [firebaseiot::class, 'fetchbulbs']);
        Route::post('/storebulbOn', [firebaseiot::class, 'storebulbOn']);
        Route::post('/storebulbOff', [firebaseiot::class, 'storebulbOff']);


        Route::get('/fetchpumps', [firebaseiot::class, 'fetchpumps']);
        Route::post('/storepumpOn', [firebaseiot::class, 'storepumpOn']);
        Route::post('/storepumpOff', [firebaseiot::class, 'storepumpOff']);


 
    });
});
