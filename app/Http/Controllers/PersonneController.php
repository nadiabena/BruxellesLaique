<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Personne;

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

  	/**
     * Show the form for creating a new person.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('personne.create');
    }

  	/**
     * Display a listing of the persons.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //$personne = Personne::all()->toArray();
        //return view('personne.index', compact('personne'));
        return view('personne');
    }

	public function store(Request $request){
		$personne = $this->validate(request(), [
          'nom' => 'required',
          'prenom' => 'required',
          'birthday' => 'required',
          'place_of_birthday' => 'required',
          'genre' => 'required',
          'id_national' => 'required',
          'etat_civil' => 'required',
		  'nationality' => 'required',
		  'address' => 'required',
		  'gsm' => 'required',
		  'phone' => 'required',
		  'email' => 'required'
        ]);

        Personne::create($personne);
        return back()->with('success', 'Person has been added'); 
    	
  	}
    
}



