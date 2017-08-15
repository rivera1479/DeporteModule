<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventCostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_costs', function (Blueprint $table) {
            $table->increments('id');            
            $table->integer('events_id')->unsigned();
            $table->foreign('events_id')->references('id')->on('events');
            $table->integer('cost_settings_id')->unsigned();
            $table->foreign('cost_settings_id')->references('id')->on('cost_settings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
