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
        Schema::create('partais', function (Blueprint $table) {
            $table->id();
            $table->string('partai')->unique();
            $table->date('tanggal_dibentuk');
            $table->string('ketua_umum');
            $table->string('jumlah_kursi_dpr');
            $table->string('jumlah_kursi_dpd');
            $table->string('jumlah_kursi_dprd');
            $table->string('link');
            $table->string('filename');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partais');
    }
};
