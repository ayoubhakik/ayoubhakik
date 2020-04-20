<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoutenancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soutenances', function (Blueprint $table) {
            $table->bigIncrements('id_soutenance');
              $table->bigInteger('id_jurie1')->unsigned();
            $table->foreign('id_jurie1')->references('id_jurie')->on('juries');
                $table->bigInteger('id_jurie2')->unsigned();
            $table->foreign('id_jurie2')->references('id_jurie')->on('juries');
                $table->bigInteger('id_jurie3')->unsigned();
            $table->foreign('id_jurie3')->references('id_jurie')->on('juries');
            $table->date('date_soutenance');
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
        Schema::dropIfExists('soutenances');
    }
}
