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
        Schema::create('paket_produks', function (Blueprint $table) {
            $table->id();
            $table->integer('granularity_id');
            $table->integer('id_delivery');
            $table->integer('id_jenis_paket_produk');
            $table->string('nama_produk', 100);
            $table->text('deskripsi_produk');
            $table->string('jurnal_produk_id', 100);
            $table->text('gambar');
            $table->integer('harga');
            $table->text('tnc');
            $table->string('url_sample_api', 100);
            $table->string('status_tampil', 1);
            $table->string('status_aktif', 1);
            $table->string('status_b2b', 1);
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
        Schema::dropIfExists('paket_produks');
    }
};
