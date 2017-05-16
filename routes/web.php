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

Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/recipes', 'RecipesController@index')->name('recipes');

Route::get('/recipes/add', 'RecipesController@create');
Route::post('/recipes', 'RecipesController@store');

Route::get('/recipes/{recipe}', 'RecipesController@show');
Route::get('/recipes/{recipe}/edit', 'RecipesController@edit');
Route::post('/recipes/{recipe}', 'RecipesController@update')->name('recipe');

Route::get('recipes/{recipe}/delete', 'RecipesController@delete');

Route::get('/recipes/{recipe}/ingredients/add', 'IngredientsController@create');
Route::post('/recipes/{recipe}/ingredients/add', 'IngredientsController@store')->name('ingredient');
