<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get("/login",function(){
    return view("layouts.login");
});

Route::get("/index",function(){
    return view("layouts.index");
});

Route::get("report", function(){
    return view("layouts.report");
});

Route::get("formulario", function(){
    return view("layouts.formulario");
});
Route::get("guia", function(){
    return view("layouts.guide");
});


Route::get("/banco/","BancoController@index");
Route::get("/banco/index","BancoController@index");
Route::get("/banco/create","BancoController@create");