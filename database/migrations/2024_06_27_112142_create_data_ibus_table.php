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
        Schema::create('data_ibus', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->string('NIK');
            $table->string('Usia_kehamilan');
            $table->string('jumlah_kehamilan');
            $table->string('riwayat_persalinan_sebelumnya');
            $table->string('kesehatan_janin');
            $table->string('riwayat_penyakit');
            $table->string('vitamin');
            $table->string('imunisasi');
            $table->date('tanggal_melahirkan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_ibus');
    }
};
