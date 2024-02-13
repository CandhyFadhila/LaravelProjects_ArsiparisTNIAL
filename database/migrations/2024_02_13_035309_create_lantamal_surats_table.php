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
        Schema::create('lantamal_surat', function (Blueprint $table) {
            $table->id();
            $table->string('asal_surat');
            $table->string('tanggal_surat');
            $table->string('nomor_surat');
            $table->text('perihal_surat');
            $table->unsignedBigInteger('id_keterangan_surat');
            $table->timestamps();
        });

        Schema::table('lantamal_surat', function (Blueprint $table) {
            $table->foreign('id_keterangan_surat')->references('id')->on('keterangan_surat')->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lantamal_surat');
    }
};
