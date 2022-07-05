<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBungkus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bungkus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_hewan');
            $table->foreign('id_hewan')->references('id')->on('hewan');
            $table->enum('type',['Belum','Proses','Selesai']);
            $table->string('jumlah_bungkusan');
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
        Schema::dropIfExists('bungkus');
    }
}
