<?php

use Illuminate\Support\Facades\Route;
//ADMIN
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\TestimonioController;
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

Route::get('/administrador', [AuthController::class,'showLoginForm'])->name('admin.login.get');
Route::post('/login', [AuthController::class,'login'])->name('admin.login');
Route::get('/admin_logout', [AuthController::class,'logout'])->name('admin.logout');

Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => 'auth:admins'], function () {
        //-----------------HOME-------------------------------//
        Route::get('/home', [HomeController::class,'index'])->name('home.index');
        //---------------------------TESTIMONIOS------------------------------------------------------//
        Route::get('testimonio', [TestimonioController::class,'index'])->name('testimonio.index');
		Route::get('testimonio/create',[TestimonioController::class,'create'])->name('testimonio.create');
		Route::post('testimonio/store',[TestimonioController::class,'store'])->name('testimonio.store');
		Route::get('testimonio/edit/{id}', [TestimonioController::class,'edit'])->name('testimonio.edit');
		Route::put('testimonio/update/{id}',[TestimonioController::class,'update'])->name('testimonio.update');
		Route::get('testimonio/delete/{id}', [TestimonioController::class,'delete'])->name('testimonio.delete');
         
		//-----------------------------------------------------------------------------------------------//


    });
});
