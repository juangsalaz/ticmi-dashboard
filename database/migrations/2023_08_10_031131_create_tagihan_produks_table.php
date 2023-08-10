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
        Schema::create('tagihan_produks', function (Blueprint $table) {
            $table->id();
            $table->integer('id_tagihan_pajak');
            $table->integer('jumlah_tagihan');
            $table->date('tanggal_tagihan');
            $table->date('tanggal_jatuh_tempo');
            $table->integer('tota_item');
            $table->string('status_tagihan', 20);
            $table->integer('diskon');
            $table->string('nomor_tagihan', 50);
            $table->integer('besar_pajak');
            $table->string('status_termin_b2b', 1);
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
        Schema::dropIfExists('tagihan_produks');
    }
};
