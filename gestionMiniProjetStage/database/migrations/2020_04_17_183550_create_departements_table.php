<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departements', function (Blueprint $table) {
            $table->id();
            $table->string('nom_departement')->default('Informatique');
            $table->string('nom');
            $table->string('prenom');
            $table->string('username');
            $table->string('password');
            $table->string('email')->unique();
            $table->string('telephone')->unique();
            $table->string('status')->text();
            $table->string('description')->text();
            $table->string('image_link')->unique();
            $table->string('facebook')->text();
            $table->string('twitter')->text();
            $table->string('google')->unique();
            $table->string('linkedin')->unique();

            //date of the last update 
            $table->timestamp('last_update')->nullable();
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
        Schema::dropIfExists('departements');
    }
}
