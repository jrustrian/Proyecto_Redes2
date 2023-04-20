<?php

use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;
use App\Bitacora;
use App\Http\Controllers\BitacoraController;
use App\Http\Controllers\ListabitacoraController;


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
    return view('home');
})->name('home');

Route::get('/dar', function (){
   return view('dar');
})->name('dar');

Route::get('/electrosen', function (){
    return view('electrosen');
})->name('electrosen');


Route::post('/home', [\App\Http\Controllers\ComentarioController::class, 'create'])->name('comentarioCreate');

Route::get('/login',[SessionsController::class, 'create'])
    ->name('login.index');

Route::post('/login',[SessionsController::class, 'store'])->name('login.store');

Route::get('/logout',[SessionsController::class, 'destroy'])
    ->name('login.destroy');

Route::prefix('/bitacora')->middleware('auth')->group(
    function (){
        Route::get('/', [\App\Http\Controllers\BitacoraController::class, 'index'])->name('bitacoraIndex');
    }
);
//Route::get('/bitacora', 'ListabitacoraController@listar');
Route::get('/ruta-bitacora', 'ListabitacoraController@listar')->name('bitacoraIndex');
Route::get('/search-bitacora', 'ListabitacoraController@search')->name('bitacoraIndex');

