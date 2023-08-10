<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TagihanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($tagihan_id)
    {
        $produks = DB::table('detail_tagihans')->where('id_tagihan', $tagihan_id)
                                    ->orWhere('tagihan_produks.nomor_tagihan', $tagihan_id)
                                    ->leftJoin('tagihan_produks', 'tagihan_produks.id', '=', 'detail_tagihans.id_tagihan')
                                    ->leftJoin('berlangganan_produk', 'berlangganan_produk.id', '=', 'detail_tagihans.id_berlangganan')
                                    ->leftJoin('paket_produks', 'paket_produks.id', '=', 'berlangganan_produk.id_paket_produk')
                                    ->leftJoin('pelanggans', 'pelanggans.id', '=', 'berlangganan_produk.id_pelanggan')
                                    ->get();
        return response()->json([
            'data' => $produks
        ]);

    }
}
