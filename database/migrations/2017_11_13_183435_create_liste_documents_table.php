<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListeDocumentsTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('liste_documents', function (Blueprint $table) {
            $table->increments('id_liste_documents');

            $table->integer('id_personne')->unsigned();
            $table->foreign('id_personne')->references('id_personne')->on('personne');

            $table->string('intitule_document');
            $table->string('document');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('liste_documents');
    }
}
