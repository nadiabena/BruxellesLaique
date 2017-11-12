<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personne extends Model{
/*	protected $fillable = ["id_personne","nom","prenom","date_de_naissance","lieu_de_naissance","id_national",
						   "numero_ibis","etat_civil","nationalite","adresse","gsm","telephone","mail","genre"
						 , "permis_de_conduire","etude","formation","moment_de_formation", 
						   "nbre_heures_par_periode","inoccupation"];*/

	protected $fillable = ["id_personne","nom","prenom","date_de_naissance","lieu_de_naissance","id_national",
						   "etat_civil","nationalite","adresse","gsm","telephone","mail","genre"];						  
}
