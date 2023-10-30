<?php

use Illuminate\Support\Facades\Route;
//ADMIN
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\TestimonioController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\ConfiguracionController;
use App\Http\Controllers\admin\PerfilController;
use App\Http\Controllers\admin\PropiedadController;
use App\Http\Controllers\admin\PrevisualizarController;
//WEB
use App\Http\Controllers\web\WebController;
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
Route::get('/', [WebController::class,'index'])->name('web.index');


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
        //---------------------------BLOGS------------------------------------------------------//
        Route::get('blog', [BlogController::class,'index'])->name('blog.index');
		Route::get('blog/create',[BlogController::class,'create'])->name('blog.create');
		Route::post('blog/store',[BlogController::class,'store'])->name('blog.store');
		Route::get('blog/edit/{id}', [BlogController::class,'edit'])->name('blog.edit');
		Route::put('blog/update/{id}',[BlogController::class,'update'])->name('blog.update');
		Route::get('blog/delete/{id}', [BlogController::class,'delete'])->name('blog.delete');
         
		//-----------------------------------------------------------------------------------------------//
		//---------------------------CONFIGURACIÓN------------------------------------------------------//
        Route::get('configuracion', [ConfiguracionController::class,'index'])->name('configuracion.index');
		Route::post('configuracion/store',[ConfiguracionController::class,'store'])->name('configuracion.store');
         
		//-----------------------------------------------------------------------------------------------//
		//---------------------------PERFIL------------------------------------------------------//
        Route::get('perfil', [PerfilController::class,'index'])->name('perfil.index');
		Route::post('perfil/store',[PerfilController::class,'store'])->name('perfil.store');
		
		//-----------------------------------------------------------------------------------------------//
		//---------------------------PROPIEDADES------------------------------------------------------//
        Route::get('propiedades', [PropiedadController::class,'activos'])->name('activos.index');
		Route::get('completados', [PropiedadController::class,'completados'])->name('completados.index');
		Route::get('propiedades/create',[PropiedadController::class,'create'])->name('propiedades.create');
		Route::post('propiedades/store',[PropiedadController::class,'store'])->name('propiedades.store');
		Route::get('propiedades/edit/{id}', [PropiedadController::class,'edit'])->name('propiedades.edit');
		Route::put('propiedades/update/{id}',[PropiedadController::class,'update'])->name('propiedades.update');
		Route::get('propiedades/delete/{id}', [PropiedadController::class,'delete'])->name('propiedades.delete');
		Route::get('propiedades/destacar/{id}', [PropiedadController::class,'destacar'])->name('propiedades.destacar');
		Route::get('propiedades/replegar/{id}', [PropiedadController::class,'replegar'])->name('propiedades.replegar');
		Route::get('propiedades/completar/{id}', [PropiedadController::class,'completar'])->name('propiedades.completar');
		Route::get('propiedades/activar/{id}', [PropiedadController::class,'activar'])->name('propiedades.activar');
		//-----------------------------------------------------------------------------------------------//
		//---------------------------Previsualizar------------------------------------------------------//
        Route::get('pervisualizar', [PrevisualizarController::class,'index'])->name('previsualizar.index');
		
		//-----------------------------------------------------------------------------------------------//
    });
});
