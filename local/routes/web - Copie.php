<?php



Route::get('/',"HomeController@index");



Route::get("DemandeDevis","DemandeControler@index");
Route::post("DemandeDevis", "DemandeControler@store");


Route::get('Thanks',function(){
    return view('Thanks');
});

Route::get('Admin',"AdminController@index");

Route::get('vr',function(){
    return view('vr');
});