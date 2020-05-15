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
            $table->string('img_link')->unique();
            $table->string('cin')->unique();
            $table->string('cne')->unique();
            $table->integer('promotion');
            $table->string('etat');
            $table->boolean('activated');
            $table->integer('phone');
            $table->string('Email')->unique();
            $table->boolean('disponible');
            $table->bigInteger('filiere_id')->unsigned();
            $table->foreign('filiere_id')->references('id_filiere')->on('filieres');
            $table->bigInteger('id_groupe')->unsigned();
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
