<?php

use App\Categorie;
use App\Infocategorie;

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

Route::get('admin', function () {
    $category=Categorie::all();
    $info_categorie=Infocategorie::all();


    // dump($category);
    return view('create',compact('category','info_categorie'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('create_categorie', 'CategorieController@nwcategorie')->name('create_categorie');

Route::post('create_info', 'InfoController@nwinfo')->name('create_info');

Route::post('delete','CategorieController@nwdelete')->name('delete');

Route::post('update','InfoController@nwupdate')->name('update');

Route::get('home/jointure', 'InfocategorieController@get_infocategorie')->name('jointure');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
