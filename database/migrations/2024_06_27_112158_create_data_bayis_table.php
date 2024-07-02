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
        Schema::create('data_bayis', function (Blueprint $table) {
            $table->id();
            $table->integer('NIK');
            $table->string('umur');
            $table->string('jeniskelamin');
            $table->string('nama_orangtua');
            $table->string('berat_badan');
            $table->string('tinggi_badan');
            $table->string('jenis_imunisasi');
            $table->string('lingkar_kepala');
            $table->string('riwayat_penyakit');
            $table->string('status_penyakit');
            $table->string('jenis_asi');
            $table->string('lama_menyusui');
            $table->string('perkembangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_bayis');
    }
};
