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

/**
 * as pour donner un nom à la route
 */
Route::get('nadia', ['as' => 'my_route' ,function () {
    return "Coucou Nadia";
}]);

Route::get('bienvenue/{name}', function($name){
	return "Bienvenue $name";
});

Route::get('bruxellesLaique', function () {
	return "Bienvenue chez Bruxelles Laïque";
});


/**Route::get('personne', function () {
    return view('personne');
});*/

/*Route::get('personne', function () {
	return "Test0";
}); //'PersonneController@getInfos'
Route::post('personne',function () {
	return "Test1";
}); //'PersonneController@postInfos'*/


//Route::get('personne', 'PersonneController@getInfos');

Route::post('personne', 'PersonneController@postInfos');
//Route::get('personne', 'PersonneController@index');


Route::resource('personnes','PersonneController');

Route::resource('categories','CategorieController');

//Route::get('categorie', 'CategorieController@index');


//Route::get('bruxellesLaique/categorie', 'CategorieController@index');

