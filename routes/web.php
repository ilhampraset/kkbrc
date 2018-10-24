<?php

use App\Lib\Mahasiswa;
use App\Lib\ProfileMatching;
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

//Route::get('hello', 'LatihanController@index');



Route::get('/', function () {
    return view('guest.home.index');
});

Route::get('/home', function () {
    return view('guest.home.index');
});

Route::get('/register-kkbrc', function () {
    return view('guest.register.index');
});

Route::get('/judges', function () {
    return view('guest.judge.index');
});
Route::get('/about', function () {
    return view('guest.about.index');
});
Route::get('/sponsors', function () {
    return view('guest.sponsor.index');
});
Route::get('/pembayaran', function () {
    return view('guest.pembayaran.index');
});

Route::get('/rules-of-regulation', function () {
    return view('guest.rules.index');
});

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

//Route::auth();
Route::group(['prefix' => 'api/v1'], function () {
    Route::post('/peserta','PesertaController@store');

});

Route::group(['middleware' => ['auth']], function() {

   /* Route::get('/', function() {
        return view('dashboard.index');
    });*/

     Route::get('/dashboard', function(){
        return view('dashboard.index');
    });

    Route::resource('peserta', 'Admin\PesertaController');
    Route::get('pesertadata', 'Admin\PesertaController@listData');

    Route::resource('individu', 'IndividuController');
    Route::get('individudata', 'IndividuController@listData');

    Route::resource('kriteria', 'KriteriaController');
    Route::get('kriteriadata', 'KriteriaController@listData');

    Route::resource('sub_kriteria', 'SubkriteriaController');
    Route::get('sub_kriteriadata', 'SubkriteriaController@listData');

    Route::resource('parameter_sub_kriteria', 'ParametersubkriteriaController');
    Route::get('parameter_sub_kriteriadata', 'ParametersubkriteriaController@listData');

    Route::get('/user/home', function(){
        return view('user/index');
        })->middleware('role:user');

    Route::get('/user/profile-acuan','FrontEndController@profileAcuan')->middleware('role:user');

    Route::get('datapeserta', 'FrontEndController@index' )->middleware('role:user');
    Route::get('/user/data_perangkingan', 'FrontEndController@perangkingan' )->middleware('role:user');
    Route::post('simpan', 'FrontEndController@save');
    Route::post('simpan/{id}', 'FrontEndController@update');
    Route::get('data-profile-diingikan/{id}/edit', 'FrontEndController@edit');
    Route::get('datapeserta', 'FrontEndController@getDataProfile');
    Route::get('dataprofileacuan', 'FrontEndController@getDataProfileReference');
    Route::get('profile', 'FrontEndController@getProfile');
    Route::get('gapmapping', 'FrontEndController@gapMapping');
    Route::get('resultprofilematching', 'FrontEndController@resultProfileMatching');
});


/*Route::group(['middleware' => ['auth', 'role:user']], function() {

     Route::get('/', function(){
        return view('user/index');
        });

     Route::get('/home', function(){
        return view('user/index');
        });






});


*/
