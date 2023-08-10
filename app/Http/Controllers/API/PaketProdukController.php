<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\PaketProduk;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaketProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($pelanggan_id)
    {
        $pelanggan = Pelanggan::find($pelanggan_id);
        

        $array_transaksi = [];
        foreach ($pelanggan->paketProduks as $paketProduk) {
            $array_transaksi[] = $paketProduk->pivot->id;
        }

        $tagihan = DB::table('detail_tagihans')->whereIn('id_berlangganan', $array_transaksi)
                                                ->leftJoin('tagihan_produks', 'tagihan_produks.id', '=', 'detail_tagihans.id_tagihan')
                                                ->leftJoin('berlangganan_produk', 'berlangganan_produk.id', '=', 'detail_tagihans.id_berlangganan')
                                                ->get();
        
        $count = count($tagihan);
      
        return response()->json([
            'draw' => 1,
            'recordsTotal' => $count,
            'recordsFiltered' => $count,
            'data' => $tagihan
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
