<?php
/**
 * Created by IntelliJ IDEA.
 * User: Home
 * Date: 06-04-2019
 * Time: 18:44
 */
\Illuminate\Support\Facades\Route::group(['namespace'=>'anandPackages\contact\Http\Controllers'],function(){
    Route::get('contact','Contactuscontroller@index');
    Route::post('contact','Contactuscontroller@sendTo');
});

