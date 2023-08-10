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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->integer('id_tagihan');
            $table->integer('id_payment_gateway');
            $table->integer('id_promosi');
            $table->integer('id_voucher');
            $table->integer('id_termin_b2b');
            $table->date('tanggal_bayar');
            $table->integer('jumlah_bayar');
            $table->integer('uang_muka');
            $table->integer('diskon');
            $table->string('kode_mitra', 100);
            $table->text('file_faktur');
            $table->string('status_bayar', 20);
            $table->string('upload_bukti_bayar', 100);
            $table->string('approve_bukti_bayar', 20);
            $table->tinyInteger('deleted');
            $table->string('created_by',100);
            $table->string('updated_by',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
