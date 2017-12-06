<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ListeDocuments;

use App\Personne; //???


class ListeDocumentsController extends Controller{
    
    //public $liste_documents = ListeDocuments::all()->toArray();


    public function index(){
   	  $personnes = Personne::all()->toArray(); 	
      $liste_documents = ListeDocuments::all()->toArray();
      return view('personnes.index', compact('personnes','liste_documents'));
    }

}







