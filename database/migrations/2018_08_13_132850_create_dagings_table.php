<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDagingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dagings', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idjenisdaging');
            $table->unsignedInteger('iduser');
            $table->index('idjenisdaging');
            $table->index('iduser');
            $table->integer('jumlah');
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
        Schema::dropIfExists('dagings');
    }
}
