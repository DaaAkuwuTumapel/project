<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama_siswa',20);
            $table->integer('id_kelas');
            $table->integer('id_jurusan');
            $table->string('no_hp',15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('siswa');
    }
};
