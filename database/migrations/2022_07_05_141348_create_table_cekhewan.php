<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCekhewan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_cekhewan', function (Blueprint $table) {
            $table->id();
            $table->foreign('id_hewan')->references('id')->on('hewan');
            $table->string('kepala');
            $table->string('kaki');
            $table->string('kulit');
            $table->string('jantung');
            $table->string('hati');
            $table->string('ekor');
            $table->string('status');
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
        Schema::dropIfExists('table_cekhewan');
    }
}
