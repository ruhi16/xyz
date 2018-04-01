<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dpname')->nullable();
            $table->string('dpvoterid')->nullable();
            $table->string('dpadhaarid')->nullable();
            $table->string('dphfname')->nullable();
            $table->string('dpaddr')->nullable();
            $table->string('dpgp')->nullable();
            $table->date('dpdeathdt')->nullable();
            $table->string('bnname')->nullable();
            $table->string('bnrelation')->nullable();
            $table->string('bnvoterid')->nullable();
            $table->string('bnadhaarid')->nullable();
            $table->string('amount')->nullable();
            $table->date('paydt')->nullable();
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
        Schema::dropIfExists('records');
    }
}
