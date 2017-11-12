<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonneTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('personne', function (Blueprint $table) {
            $table->increments('id_personne');

            $table->string('nom');
            $table->string('prenom');
            $table->dateTime('date_de_naissance');
            $table->string('lieu_de_naissance');
            $table->string('id_national');
            $table->string('numero_ibis');
            $table->string('etat_civil');
            $table->string('nationalite');
            $table->string('adresse');
            $table->string('gsm');
            $table->string('telephone');
            $table->string('mail');
            $table->char('genre',1);
            $table->string('permis_de_conduire');
            $table->string('etude');
            $table->string('formation');
            $table->dateTime('moment_de_formation');
            $table->float('nbre_heures_par_periode',5,2);
            $table->char('inoccupation',1);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('personne');
    }
}
