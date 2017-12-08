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

//Route::resource('personnes','ListeDocumentsController');

Route::get('/upload', 'UploadController@uploadForm');
Route::post('/upload', 'UploadController@uploadSubmit'); //?{$id}


/*Route::group('personnes', function(){
  Route::resource('personnes', 'PersonneController');
  Route::resource('personnes', 'ListeDocumentsController');
});*/

//Route::get('personnes/search', array('as'=>'search_bar','uses'=>'SearchPersonneController@index'));

//Route::get('pers/search', 'SearchPersonneController@autocomplete');

/*Route::get('nadia', function () {
    return view('nadia');
});*/



//Route::get('/autocomplete',array('as'=>'autocomplete','uses'=>'SearchPersonneController@autocomplete'));

Route::resource('pers/search','SearchPersonneController');

Route::get('pers/search', 'SearchPersonneController@index');
Route::post('pers/search', 'SearchPersonneController@autocomplete');

Route::get('ajax', 'SearchPersonneController@autocomplete');

Route::get('personnes/{id?}', function($id){
  $tache = Personne::buttonModalAjax($id);
  return Response::json($tache);
});




/*Route::get('pers/search_bar', function($keyword){
  if (Request::ajax()) {
    $personnes = App\Personne::where('nom','like', '%'.'lettres'.'%')->get();
    foreach ($personnes as $value) {
      return '<div class="row-result">
                <div class="col-md-8">
                  <p class="text_search">'.$value->nom.'</p>
                </div>
              </div>';
    }
  }
});*/



//Partie admin
//Route::post('login', [ 'as' => 'login', 'uses' => 'LoginController']);

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');





