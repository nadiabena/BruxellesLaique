<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonneByCategorie extends Model{
	protected $fillable = ["id_personne_by_categorie","id_personne","id_categorie"];
}
