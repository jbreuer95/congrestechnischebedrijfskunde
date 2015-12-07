<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInschrijvingSessieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inschrijving_sessie', function(Blueprint $table)
        {
            $table->integer('inschrijving_id')->unsigned()->index();
            $table->foreign('inschrijving_id')->references('id')->on('inschrijvingen')->onDelete('cascade');
            $table->integer('sessie_id')->unsigned()->index();
            $table->foreign('sessie_id')->references('id')->on('sessies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('inschrijving_sessie');
    }
}
