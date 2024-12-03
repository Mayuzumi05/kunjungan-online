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
        Schema::create('kunjungan', function (Blueprint $table) {
            $table->id();
            $table->string('tipe_kunjungan')->nullable(false);
            $table->string('nama_tahanan')->nullable(false);
            $table->string('nama_pengunjung')->nullable(false);
            $table->string('alamat')->nullable(false);
            $table->string('nik')->nullable(false);
            $table->string('foto_ktp')->nullable(false);
            $table->string('nomor_hp')->nullable(true);
            $table->string('hubungan')->nullable(false);
            $table->date('hari')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kunjungan');
    }
};
