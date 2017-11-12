<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonneByCategorieTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('personne_by_categorie', function (Blueprint $table) {
            $table->increments('id_personne_by_categorie');

            //$table->foreign('id_personne')->unsigned();
            $table->integer('id_personne')->unsigned();
            $table->foreign('id_personne')->references('id_personne')->on('personne');

            //$table->foreign('id_categorie')->unsigned();
            $table->integer('id_categorie')->unsigned();
            $table->foreign('id_categorie')->references('id_categorie')->on('categorie');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('personne_by_categorie');
    }
}



