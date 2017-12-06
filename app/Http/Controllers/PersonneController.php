<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Personne;
use App\ListeDocuments;

//namespace database\migrations;	
//use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Migrations;

class PersonneController extends Controller{

	public function getInfos(){
		return view('personne');
		//return "Ok..";
	}

	public function postInfos(Request $request){
		return 'Le nom est ' . $request->input('nom') . ' ' .$request->input('prenom'); 
	}


    public function index(){
      //$categories = Categorie::get();
      //return view('categorie',['categorie' => $categories]);
      //return "Test..";
      //return View::make('categories.index',compact('categories'));

      /*$personnes = Personne::all()->toArray();
      return view('personnes.index', compact('personnes'));*/




      $personnes = Personne::all()->toArray();  
      $liste_documents = ListeDocuments::all()->toArray();
      return view('personnes.index', compact('personnes','liste_documents'));


      //return view('categorie');
    }

  	/**
     * Show the form for creating a new person.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('personnes.create');
    }

  	/**
     * Display a listing of the persons.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function index(){
        return view('personne');
    }*/

	public function store(Request $request){
   //return 'look: '. $request->input('nom') .' --- '. $request->input('birthday');


		$personne = $this->validate(request(), [
          //'id_personne' => 'required',
          'nom' => 'required',
          'prenom' => 'required',
          'date_de_naissance' => 'required',  //|date_format:dd/mm/YYYY            ---------- |date_format:aaaa-mm-dd
          'lieu_de_naissance' => 'required',
          'genre' => 'required',
          'id_national' => 'required',
          'etat_civil' => 'required',
		      'nationalite' => 'required',
		      'adresse' => 'required',
		      'gsm' => 'required',
		      'telephone' => 'required',
		      'mail' => 'required',
          'numero_ibis' => 'required',
          'permis_de_conduire' => 'required',
          'etude' => 'required',
          'formation' => 'required',
          'moment_de_formation' => 'required',
          'nbre_heures_par_periode' => 'required',
          'inoccupation' => 'required'
        ]);

    Personne::create($personne);
    return back()->with('success', 'Person has been added');

    //$personne = Personne::create($request->all());
    //return back()->with('success', 'Person has been added'); 
    
    //return redirect(route('personne.edit', $personne));	
  	}

    public function destroy($id){
      $personne = Personne::find($id);
      $personne->delete();

      return redirect('personnes')->with('success','Person has been  deleted');
    }
    
}



