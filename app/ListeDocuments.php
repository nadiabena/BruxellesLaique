<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListeDocuments extends Model{
	public $table = "liste_documents";

	protected $primaryKey = 'id_liste_documents';

	protected $fillable = ["id_liste_documents", "id_personne","intitule_document","document"];

}




