<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mataPelajaran', function (Blueprint $table) {
            $table->string('KODE_MP');
            $table->string('NAMA_MP');
            $table->Integer('SKS');
            $table->Integer('SEMESTER');
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
        Schema::dropIfExists('mataPelajaran');
    }
};
