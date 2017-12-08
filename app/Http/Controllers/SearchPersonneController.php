<?php

namespace App\Http\Controllers;

use App\Personne;
use Input;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Http\Controllers\DB;

/*use Illuminate\Support\Facades\Input;*/
/*use App\Http\Controllers\Redirect;
namespace App\Http\Controllers\Redirect\Controller;*/

class SearchPersonneController extends Controller{


    public function index(){
    	return view('search_bar'); //personne.personne view('search_bar.search_bar');
    }

    public function autocomplete(Request $request){
    	/*$term = $request->term;
		$donnees = Personne::where('nom', 'LIKE','%'.$recherche.'%')->take(10)->get();
		$resultat=array();
		foreach($donnees as $key => $value){
			$resultat[]=['id'=>$value->id_personne,
				     	 'value'=>$value->nom];
		}
		return response()->json($resultat);*/

/*		$term = $request->searchname;
		$name = $request->input('name');
		
		$donnees = Personne::where('nom', 'LIKE','%'.$term.'%')->get();
		$resultat=array();
		foreach($donnees as $key => $value){
			$resultat[]=['id'=>$value->id_personne,
				     	 'value'=>$value->prenom];
		}
		return response()->json($resultat);*/

		//return back()->with('succes', 'Person searched is '.$request->id_nom_recherche);

		$this->layout = null;
		print_r('sfdsfsd');

		if($request->ajax()){
			$personnes = Personne::all();
			$id_personne = $request->nom_recherche;      //Input::get('id_nom_recherche');
			dd('id_personne: *** '.$id_personne);

			//$query->where('nom', 'like', '%' . $request->get('search_bar') . '%');
			if ($id_personne!=""){
				$personne = Personne::where('nom', 'LIKE','%'.$id_personne.'%')
				->orWhere('prenom', 'LIKE','%'.$id_personne.'%')
				->get();
				return view('search_bar', compact('personne'));
			}else{
				return back()->with('success','Veuillez entrer une donnée svp');
			}

		}


	}
}