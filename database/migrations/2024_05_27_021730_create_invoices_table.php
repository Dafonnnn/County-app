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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('nama_client', 50);
            $table->date('tanggal_deal');
            $table->string('periode_paket');
            $table->string('jenis_paket', 15);
            $table->integer('closing_bill');
            $table->text('pic_laporan');
            $table->integer('pembayaran');
            $table->integer('tanda_selesai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
