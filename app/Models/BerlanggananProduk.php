<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\Pivot;

class BerlanggananProduk extends Pivot
{
    protected $table = 'berlangganan_produk';

    public function detailTagihan(): HasOne
    {
        return $this->hasOne(DetailTagihan::class, 'id_berlangganan');
    }

}
