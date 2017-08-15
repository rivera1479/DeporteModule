<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompetitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competitors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_com');
            $table->string('last_name');
            $table->string('gender');
            $table->integer('dni');
            $table->string('email');
            $table->date('birthdate');
            $table->string('address');
            $table->string('phone');
            $table->string('cell_phone');
            
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
