<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->bigIncrements('id_etudiant');
            $table->string('nom');
             $table->string('prenom');
             $table->string('img_link')->unique()->nullable();
             $table->string('cin')->unique();
             $table->string('cne')->unique();
             $table->integer('promotion')->nullable();
            $table->string('niveau')->nullable();
             $table->string('etat')->nullable();
             $table->boolean('activated')->nullable();
             $table->string('phone')->nullable();
             $table->string('email')->nullable();
             $table->boolean('disponible')->nullable();
              $table->bigInteger('id_filiere')->unsigned()->nullable();
              $table->foreign('id_filiere')->references('id_filiere')->on('filieres');
               $table->bigInteger('id_groupe')->unsigned()->nullable();
               $table->foreign('id_groupe')->references('id_groupe')->on('groupes');
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
        Schema::dropIfExists('etudiants');
    }
}
