<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('detail');            
            $table->integer('invoices_id')->unsigned();
            $table->foreign('invoices_id')->references('id')->on('invoices');
            $table->integer('inscribed_id')->unsigned();
            $table->foreign('inscribed_id')->references('id')->on('inscribed');
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
