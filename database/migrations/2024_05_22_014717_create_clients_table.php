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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('nama_perusahaan', 50);
            $table->string('alamat_perusahaan', 200);
            $table->string('no_telp_perusahaan', 12); // Menggunakan string untuk nomor telepon
            $table->string('status', 15);
            $table->string('paket', 10);
            $table->string('kebutuhan_laporan', 250);
            $table->date('masa_aktif'); // Menggunakan dateTime untuk tanggal dan waktu
            $table->string('nama_pic', 30);
            $table->string('telp_pic', 12); // Menggunakan string untuk nomor telepon
            $table->string('alamat_pic', 200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
