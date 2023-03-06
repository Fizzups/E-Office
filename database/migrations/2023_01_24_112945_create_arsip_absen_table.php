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
        Schema::create('arsip_absen', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 20);
            $table->string('divisi', 20);
            $table->time('jam_masuk');
            $table->time('jam_pulang');
            $table->string('keterangan', 10);
            $table->time('lembur');
            $table->string('shift', 10);
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
        Schema::dropIfExists('arsip_absen');
    }
};
