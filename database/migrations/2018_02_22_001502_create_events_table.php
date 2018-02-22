<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->timestamps();
            $table->timestamp('event_date');
            $table->increments('id');
            $table->string('name');
            $table->string('genere');
        });

        DB::table('events')->insert(
            [
                [
                    'event_date' => new \DateTime(),
                    'name' => 'kaballah',
                    'genere' => 'dale'
                ]
            ]
                );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
