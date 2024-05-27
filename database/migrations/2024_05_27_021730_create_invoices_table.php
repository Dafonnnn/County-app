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
            $table->integer('periode_paket')->unsigned();
            $table->string('jenis_paket', 15);
            $table->date('closing_bill');
            $table->string('pic_laporan', 30);
            $table->string('pembayaran', 30);
            $table->string('tanda_selesai', 15);
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
