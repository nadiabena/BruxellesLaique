<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model{
	public $table = "categorie";

	protected $primaryKey = 'id_categorie';

	protected $fillable = ["nom_categorie","id_categorie"];
}

