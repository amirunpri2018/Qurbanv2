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
            $table->unsignedInteger('jenis_daging_id');
            $table->unsignedInteger('user_id');
            $table->index('jenis_daging_id');
            $table->index('user_id');
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
