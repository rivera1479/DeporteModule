<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailCostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_costs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('details');
            $table->integer('events_id')->unsigned();
            $table->foreign('events_id')->references('id')->on('events');
            $table->integer('cost_settings_id')->unsigned();
            $table->foreign('cost_settings_id')->references('id')->on('cost_settings');
            $table->integer('competitors_id')->unsigned();
            $table->foreign('competitors_id')->references('id')->on('competitors');
            $table->integer('invoices_id')->unsigned();
            $table->foreign('invoices_id')->references('id')->on('invoices');
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
