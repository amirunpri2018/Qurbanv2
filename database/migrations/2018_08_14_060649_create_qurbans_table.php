<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQurbansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qurbans', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('pengurban_id');
            $table->index('pengurban_id');
            $table->unsignedInteger('user_id');
            $table->index('user_id');
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
        Schema::dropIfExists('qurbans');
    }
}
