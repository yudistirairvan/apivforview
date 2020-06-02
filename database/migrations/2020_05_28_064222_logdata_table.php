<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LogdataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logdatas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Person');
            $table->string('IdLink');
            $table->string('LogType');
            $table->string('Gate');
            $table->string('SaldoAwal');
            $table->string('Credit');
            $table->string('Debit');
            $table->string('SaldoAkhir');
            $table->string('Status');
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
        Schema::dropIfExists('logdatas');
    }
}
