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
        Schema::create('pelanggans', function (Blueprint $table) {
            $table->id();
            $table->integer('id_kyc');
            $table->integer('id_perusahaan');
            $table->string('username', 100);
            $table->string('password', 50);
            $table->string('nama_pelanggan', 100);
            $table->string('tempat_lahir', 100);
            $table->date('tanggal_lahir');
            $table->string('gender', 1);
            $table->string('alamat_ktp', 500);
            $table->string('alamat_domisili', 500);
            $table->string('kota_domisili', 50);
            $table->string('provinsi_domisili', 50);
            $table->string('email', 100);
            $table->string('no_hp', 100);
            $table->string('fb', 100);
            $table->string('profile_photo', 100);
            $table->json('kyc');
            $table->string('jabatan', 20);
            $table->integer('skor_kuesioner');
            $table->string('status_pelanggan', 20);
            $table->string('status_akun', 20);
            $table->string('role_pelanggan', 20);
            $table->string('status_mitra', 20);
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
        Schema::dropIfExists('pelanggans');
    }
};
