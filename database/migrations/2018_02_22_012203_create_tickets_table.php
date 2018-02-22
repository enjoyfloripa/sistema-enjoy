<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->timestamps();
            $table->increments('id');

            $table->string('sector');
            $table->tinyInteger('batch')->null();
            $table->double('value');
            $table->tinyInteger('gender')->unsigned();

            $table->integer('locator')->null();
            $table->integer('sequential')->null();
            $table->integer('barcode')->null();

            $table->integer('user_id')->unsigned()->null();
            $table->integer('event_id')->unsigned()->null();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('event_id')->references('id')->on('events');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
