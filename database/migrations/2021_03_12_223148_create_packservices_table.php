<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackservicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packservices', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->double('price')->required();

            $table->bigInteger('internet_id')->unsigned()->nullable();
            $table->bigInteger('telephone_id')->unsigned()->nullable();
            $table->bigInteger('cable_id')->unsigned()->nullable();
            
            $table->foreign('internet_id')->references('id')->on('internets')->onDelete('cascade');
            $table->foreign('telephone_id')->references('id')->on('telephones')->onDelete('cascade');
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
        Schema::dropIfExists('packservices');
    }
}
