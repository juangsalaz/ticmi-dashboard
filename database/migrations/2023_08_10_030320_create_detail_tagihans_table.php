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
        Schema::create('detail_tagihans', function (Blueprint $table) {
            $table->id();
            $table->integer('id_tagihan');
            $table->integer('id_berlangganan');
            $table->integer('jumlah');
            $table->integer('harga_satuan');
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
        Schema::dropIfExists('detail_tagihans');
    }
};
