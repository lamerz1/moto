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

// Главная
Route::get('/', [
    'as' => 'home',
    'uses' => 'IndexController@index'
]);

// Список Моделей
Route::get('/catalog/{mark_alias}/', [
    'as' => 'mods',
    'uses' => 'CatalogController@mods']
)->where([
    'mark_alias' => '[a-z0-9\-]+'
]);

// Список Мотоциклов
Route::get('/catalog/{mark_alias}/{model_alias}/', [
    'as' => 'motos',
    'uses' => 'CatalogController@motos']
)->where([
    'mark_alias' => '[a-z0-9\-]+',
    'model_alias' => '[a-z0-9\-]+'
]);

// Страница конкретного мотоцикла
Route::get('/catalog/{mark_alias}/{model_alias}/{id}.html', 'CatalogController@moto')->where([
    'mark_alias' => '[a-z0-9\-]+',
    'model_alias' => '[a-z0-9\-]+',
    'id' => '[0-9]+'
]);

// Обычная страница
Route::get('/{page_alias}.html', [
    'as' => 'page',
    'uses' => 'PageController@index']
)->where([
    'page_alias', '[a-z0-9\-]+'
]);
