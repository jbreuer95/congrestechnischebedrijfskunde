<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInschrijvingenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inschrijvingen', function (Blueprint $table) {
            $table->increments('id');
            $table->string('naam');
            $table->string('mail');
            $table->string('hogeschool');
            $table->string('vakgebied');
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
        Schema::drop('inschrijvingen');
    }
}
