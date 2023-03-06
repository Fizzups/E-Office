<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\SoftDeletes;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawans', function (Blueprint $table) {
            $table->id();
            $table->char('nik', 20)->unique();
            $table->string('gender', 1);
            $table->string('jabatan', 20);
            $table->string('divisi', 20);
            $table->char('no_hp', 20);
            $table->text('alamat', 20)->nullable();
            $table->date('mulai_kerja', 20);
            $table->date('selesai_kerja', 20);
            $table->char('gaji', 20);
            $table->softDeletes();
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
        Schema::dropIfExists('karyawans');
    }
};
