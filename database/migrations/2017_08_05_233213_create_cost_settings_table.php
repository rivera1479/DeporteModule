<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCostSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cost_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_cost');
            $table->integer('type_discount');
            $table->integer('type');
            $table->integer('cost');
            $table->boolean('required');
            $table->date('date_cos');
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
