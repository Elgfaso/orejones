<?php

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
    return view('index');
});


Route::get('welcome', function () {
    return view('welcome');
});

Route::get('ayuda',function(){
    return view('atencion_cliente');
});

    // Route::get('registro',function(){
    //     return view('registro');
    // });


Route::get('foro',function(){
    return view('foro');
});


// Route::get('perfil',function(){
//     return view('perfil');
// });

Route::get('publicar',function(){
    return view('publicacion');
});


Route::get('alimentacion',function(){
    return view('info_alimentacion');
});

Route::get('cuidados',function(){
    return view('info_cuidados');
});

Route::get('curiosidades',function(){
    return view('info_curiosidades');
});

Route::get('enfermedades',function(){
    return view('info_enfermedades');
});

Route::get('historia',function(){
    return view('info_historia');
});

Route::get('razas',function(){
    return view('info_razas');
});

// Route::get('admin',function(){
//     Route::get('index','UsuarioController@index');
// });

Route::get('admin',function(){
    return view('admin');
});

Route::get('registro', 'UsuarioController@crear_usuario');
Route::post('index','UsuarioController@guardar_usuario');

Route::post('perfil','UsuarioController@logear');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
