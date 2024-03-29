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
            // $table->id();
            $table->uuid('id')->primary();
            $table->string('asal_surat');
            $table->string('tanggal_surat');
            $table->string('nomor_surat');
            $table->text('perihal_surat');
            $table->foreignUuid('keterangan_surat_id')->constrained('keterangan_surat');
            $table->timestamps();
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
