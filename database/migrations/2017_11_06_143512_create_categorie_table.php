<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategorieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
       /* DB::beginTransaction();
        try {*/
            Schema::create('categorie', function (Blueprint $table) {
                $table->increments('id_categorie');

                $table->string('nom_categorie');

                $table->timestamps();
            });
/*            DB::commit();
        } catch (PDOException $e) {
            DB::rollBack();
            $this->down();
        }*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('categorie');
    }
}

