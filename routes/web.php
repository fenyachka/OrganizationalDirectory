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

// Individuals
Route::get('/', 'IndividualsController@index');
Route::get('/individuals', 'IndividualsController@index');
Route::get('/individuals/create', 'IndividualsController@create')->name('individual-create');
Route::post('/individuals/store', 'IndividualsController@store')->name('individual-store');
Route::get('/individuals/{individual}' , 'IndividualsController@show')->name('individual-show');
Route::get('/individuals/{individual}/edit' , 'IndividualsController@edit')->name('individual-edit');
Route::put('/individuals/{individual}' , 'IndividualsController@update')->name('individual-update');
Route::delete('/individuals/{individual}' , 'IndividualsController@destroy')->name('individual-destroy');
Route::get('/search','IndividualsController@search')->name('searchIndividual');

// Organizations
Route::get('/organizations', 'OrganizationsController@index')->name('organizations-index');
Route::get('/organizations/create', 'OrganizationsController@create')->name('organizations-create');
Route::post('/organizations/store', 'OrganizationsController@store')->name('organization-store');
Route::get('/organizations/{organization}/edit' , 'OrganizationsController@edit')->name('organization-edit');
Route::put('/organizations/{organization}' , 'OrganizationsController@update')->name('organization-update');
Route::delete('/organizations/{organization}' , 'OrganizationsController@destroy')->name('organization-destroy');
Route::get('/organizations/search','OrganizationsController@search')->name('searchOrganizationa');



