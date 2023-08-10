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
        Schema::create('berlangganan_produk', function (Blueprint $table) {
            $table->id();
            $table->integer('id_pelanggan');
            $table->integer('ber_id_berlangganan');
            $table->integer('id_paket_produk');
            $table->date('tanggal_mulai');
            $table->date('tanggal_akhir');
            $table->integer('biaya');
            $table->string('status', 50);
            $table->integer('kuota_surat_riset');
            $table->integer('sisa_kuota_surat_riset');
            $table->integer('kuota_download');
            $table->integer('sisa_kuota_download');
            $table->string('free_trial_status', 1);
            $table->tinyInteger('deleted');
            $table->string('created_by', 100);
            $table->string('updated_by', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berlangganan_produk');
    }
};
