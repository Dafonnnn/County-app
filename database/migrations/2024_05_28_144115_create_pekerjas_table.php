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
        Schema::create('pekerjas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pekerja');
            $table->integer('no_telp_pekerja')->unsigned();
            $table->string('status');
            $table->string('alamat_pekerja');
            $table->integer('id_invoice')->unsigned();
            $table->string('tugas');
            $table->date('deadline');
            $table->string('tugas_selesai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pekerjas');
    }
};
