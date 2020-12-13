<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_complet');
            $table->integer('age');
            $table->string('sexe');
            $table->string('adresse');
            $table->string('nationalite');
            $table->string('status');
            $table->string('motif_admission');
            $table->date('date_admission');
            $table->string('diag_principal');
            $table->integer('nlit');
            $table->date('date_sortie');
            $table->string('mode_sortie');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//        Schema::table('admissions', function (Blueprint $table) {
//            Schema::drop('sharks');
//        });
        Schema::dropIfExists('admissions');
    }
}
