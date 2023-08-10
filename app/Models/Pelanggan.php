<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Pelanggan extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function paketProduks(): BelongsToMany
    {
        return $this->belongsToMany(PaketProduk::class, 'berlangganan_produk', 'id_pelanggan', 'id_paket_produk')->withPivot('id_pelanggan', 'id', 'id_paket_produk', 'biaya', 'kuota_download', 'tanggal_mulai')->using(BerlanggananProduk::class);
    }

    
}
