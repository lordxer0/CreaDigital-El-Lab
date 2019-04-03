<?php
use Illuminate\Support\Facades\Auth;



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
    return view('login');
})->name('login');


Route::post('login','loginController@index')->name('validar');


Route::get('principal',function(){
    Auth::logout();
    return redirect('login');
})->name('sesion');

//proteciion de rutas

// Route::group(['middleware' => 'auth'], function(){  //de esta manera protegemos las rutas
//     Route::resource('peliculas','PeliculaController');
//     Route::get('inicio','EstudioController@consul')->name('inicio');
//     Route::get('estudios',function(){
//         return View('estudios.estudioscrear');
//     });
// });
