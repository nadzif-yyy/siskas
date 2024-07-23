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
        Schema::create('asramas', function (Blueprint $table) {
            $table->id();
            $table->string('asrama');
            $table->string('nama');
            $table->string('sekolah');
            $table->enum('gender', ['L','P']);
            $table->string('jenjang_sklh');
            $table->string('kelas');
            $table->enum('status', ['mukim', 'non mukim', 'pesantren']);
            $table->enum('kriteria', ['yatim', 'piatu', 'yatim piatu', 'dhuafa', 'anak kepas', 'anak art']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asramas');
    }
};
