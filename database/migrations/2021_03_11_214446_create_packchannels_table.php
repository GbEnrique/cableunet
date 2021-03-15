<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackchannelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packchannels', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->double('price')->required();
            $table->bigInteger('cable_id')->unsigned();
            $table->foreign('cable_id')->references('id')->on('cables')->onDelete('cascade');
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
        Schema::dropIfExists('packchannels');
    }
}
