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
    return view('dashboard');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/kupon-count', 'DashboardController@show')->name('kupon.count');
//qurban modul
Route::get('/qurban', 'QurbanController@index')->name('qurban');
Route::get('/pengurban-list', 'QurbanController@getPengurban');
Route::get('/qurban-input', function () {
    return view('qurban.qurban-input');
})->name('qurban.input');
Route::post('input-qurban', 'QurbanController@create')->name('input.qurban');
Route::get('qurban-edit/{id}', 'QurbanController@edit')->name('edit.qurban');
Route::patch('qurban-update/{qurban}', 'QurbanController@update')->name('qurban.update');
Route::get('ditujukanuntuk', function () {
    return view('qurban.ditujukanuntuk-list');
})->name('ditujukan');
Route::get('ditujukanuntuk-list','QurbanController@getDitujukanUntuk')->name('ditujukan.list');
Route::get('ditujukanuntuk-input', 'QurbanController@indexDitujukanUntuk')->name('ditujukan.input');
Route::post('input-ditujukanuntuk', 'QurbanController@createDitujukanUntuk')->name('input.ditujukanuntuk');
Route::get('ditujukanuntuk-edit/{id}', 'QurbanController@editDitujukanUntuk')->name('edit.ditujukanuntuk');
Route::patch('ditujukanuntuk-update/{ditujukan}', 'QurbanController@updateDitujukanUntuk')->name('update.ditujukanuntuk');
//kupon modul
Route::get('kupon', 'KuponController@index')->name('kupon');
Route::get('kupon-list','KuponController@getKupons')->name('kupon.list');
Route::get('kupon-qc/{jenis}','KuponController@showQcPage')->name('kupon.qc');
Route::get('kupon-search/{idKupon}','KuponController@searchKupon')->name('kupon.search');
Route::get('kupon-updatestatus/{idKupon}','KuponController@storeStatusKupon')->name('kupon.updateStatus');