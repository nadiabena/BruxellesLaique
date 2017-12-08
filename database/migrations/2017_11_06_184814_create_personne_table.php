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
            $table->date('date_de_naissance');  //dateTime
            $table->string('lieu_de_naissance');
            $table->string('id_national');
            $table->string('numero_ibis');
            $table->string('etat_civil');
            $table->string('nationalite');
            $table->string('adresse');
            $table->string('gsm');
            $table->string('telephone');
            $table->string('mail');

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


