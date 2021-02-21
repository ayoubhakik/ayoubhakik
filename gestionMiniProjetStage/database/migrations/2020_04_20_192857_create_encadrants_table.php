<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncadrantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encadrants', function (Blueprint $table) {
            $table->bigIncrements('id_encadrant');
            $table->text('nom');
            $table->text('prenom');
            $table->string('email',100)->nullable();
            $table->string('phone')->nullable();
            $table->integer('nbr_groupe')->unsigned()->nullable();
            $table->string('lien_image')->default('default.jpg');
            $table->bigInteger('id_departement')->unsigned()->nullable();
            $table->foreign('id_departement')->references('id')->on('departements');
            
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
        Schema::dropIfExists('encadrants');
    }
}