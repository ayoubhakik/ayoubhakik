<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groupes', function (Blueprint $table) {
            $table->bigIncrements('id_groupe');
            $table->string('nom_groupe');
            $table->string('sujet');
            $table->double('note');
            $table->text('appreciation');
            $table->string('rapport_final');
             $table->bigInteger('id_encadrant')->unsigned();
            $table->foreign('id_encadrant')->references('id_encadrant')->on('encadrants');
             $table->bigInteger('id_soutenance')->unsigned();
            $table->foreign('id_soutenance')->references('id_soutenance')->on('soutenances');
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
        Schema::dropIfExists('groupes');
    }
}
