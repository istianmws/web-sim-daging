<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSembelih extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sembelih', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_hewan');
            $table->foreign('id_hewan')->references('id')->on('hewan');
            $table->enum('type',['Belum','Proses','Selesai']);
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
        Schema::dropIfExists('sembelih');
    }
}
