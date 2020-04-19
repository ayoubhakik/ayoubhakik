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
            $table->increments('id_encadrant');
            $table->text('nom');
            $table->text('prenom');
            $table->string('email',100);
            $table->bigInteger('phone');
            $table->integer('nbr_groupe')->unsigned();
            $table->string('lien_image')->default('default.jpg');
            $table->integer('id_departement')->unsigned();
            $table->foreign('id_departement')->references('id_departement')->on('departements');
            
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
