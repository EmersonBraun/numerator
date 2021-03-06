<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NumerationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('numerations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sequence');
            $table->bigInteger('ref');
            $table->bigInteger('year');
            $table->ipAddress('ip');	
            $table->longText('description');
            $table->timestamps();
            $table->unsignedBigInteger('option_id');

            $table->foreign('option_id')->references('id')->on('options')->onDelete('cascade');
            //$table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('numerations');
    }
}