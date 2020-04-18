<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncadrantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encadrant', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("nomEnc");
            $table->string("prenomEnc");
            $table->string("email")->unique();
            $table->string("phone");
            $table->string("nbr_group");
            $table->string("id_depart");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('encadrant');
    }
}
