<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengurbansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengurbans', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('iduser');
            $table->index('iduser');
            $table->string('nama');
            $table->string('RT')->nullable();
            $table->string('RW')->nullable();
            $table->string('nohp')->nullable();
            $table->enum('jenisHewan',['sapi','kambing','kerbau'])->default('sapi');
            $table->enum('jenisPemberian',['Uang','Hewan'])->default('Uang');
            $table->enum('statusPembayaran',['Lunas', 'Belum Lunas'])->nullable()->default('Lunas');
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
        Schema::dropIfExists('pengurbans');
    }
}
