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

Route::get('ayuda',function(){
    return view('atencion_cliente');
});

Route::get('registro',function(){
    return view('registro');
});


Route::get('foro',function(){
    return view('foro');
});


Route::get('perfil',function(){
    return view('perfil');
});

Route::get('publicar',function(){
    return view('publicacion');
});


Route::get('info',function(){
    return view('info_conejo');
});


Route::get('admin',function(){
    return view('admin');
});


