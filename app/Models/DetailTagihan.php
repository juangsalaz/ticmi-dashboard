<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetailTagihan extends Model
{
    use HasFactory;

    public function tagihanProduk(): BelongsTo
    {
        return $this->belongsTo(TagihanProduk::class, 'id_tagihan');
    }
}
