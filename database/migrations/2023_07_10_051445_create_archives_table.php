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
        Schema::create('archives', function (Blueprint $table) {
            $table->id();
            $table->string('kode_arsip');
            $table->string('nip');
            $table->string('kode_klasifikasi');
            $table->string('nama_arsip');
            $table->text('file_path');
            $table->string('nomor_arsip');
            $table->softDeletes();
            $table->timestamps();
            $table->string('status')->default('Tersedia');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('archives');
    }
};
