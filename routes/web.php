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
    return view('welcome');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/login', 'LoginController@login')->name('login');


Route::group(['prefix' => 'signup'], function() {
    //
    
    Route::get('/','SignupController@index');
    Route::get('/step1','SignupController@step1');
    Route::get('/checkverification','SignupController@checkverificationmail')->name("checkverification");
    Route::get('/sendverification','SignupController@sendverificationmail');
    Route::post('/verifysignupemail','SignupController@verifysignupemail');

    Route::get('/step2','SignupController@step2');
    Route::post('/poststep2','SignupController@poststep2')->name('poststep2');

    Route::get('/step3','SignupController@step3');
    Route::post('/poststep3','SignupController@poststep3')->name('poststep3');

    Route::get('/step4','SignupController@step4');

    
    
});

