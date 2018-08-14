<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKuponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kupons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('idkupon');
            $table->unsignedInteger('idpengurban');
            $table->unsignedInteger('idpenerima');
            $table->unsignedInteger('iduser');
            $table->index('idpengurban')->nullable();
            $table->index('idpenerima')->nullable();
            $table->index('iduser');
            $table->enum('jenisKupon', ['Kambing','Sapi','Warga'])->default('Warga');
            $table->enum('isKembali', [0,1])->default(0);
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
        Schema::dropIfExists('kupons');
    }
}
