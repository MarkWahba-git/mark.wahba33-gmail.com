<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::group([],function(){

    Route::get('/pharmacies','PharmacyController@index')->name('pharmacies.index');

    Route::get('/pharmacies/{pharmacy}','PharmacyController@show')->name('pharmacies.show');

});

Route::group([],function(){

    Route::get('/drugs','DrugController@index')->name('drugs.index');

   Route::get('/drugs/getdrugs','DrugController@getDrugs')->name('drugs.getdrugs');
   Route::post('/drugs/postdrugs','DrugController@addDrug')->name('drugs.postdrugs');
   Route::get('/drugs/fetchdrugs','DrugController@fetchDrug')->name('drugs.fetchdrugs');
   Route::get('/drugs/deletedrugs','DrugController@deleteDrug')->name('drugs.deletedrugs');
   Route::get('/drugs/selectdrugs','DrugController@selectDrugs')->name('drugs.selectdrugs');
   Route::post('/drugs/fetchlist','DrugController@fetchList')->name('drugs.fetchlist');
   Route::get('/drugs/orderdrugs','DrugController@orderDrugs')->name('drugs.orderdrugs');
});

Route::get('/', function () {
    return view('welcome');
});
