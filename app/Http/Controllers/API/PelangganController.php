<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $pelanggans = DB::table('pelanggans');

        if ($request->date != null) {
            
            $date_request = $request->date;
            $dates = explode(" - ", $date_request);
            $date1 = strtotime($dates[0]);
            $date2 = strtotime($dates[1]);

            $date1 = date("Y-m-d H:i:s", $date1);
            $date2 = date("Y-m-d H:i:s", $date2);

            $pelanggans->whereBetween('created_at', [$date1, $date2]);
        }

        if ($request->search_value != null) {
            $pelanggans->where('nama_pelanggan', 'like', '%'.$request->search_value.'%');
        }

        $data_pelanggan = $pelanggans->where('deleted', 0)->get();
        return response()->json([
            'draw' => 1,
            'recordsTotal' => count($data_pelanggan),
            'recordsFiltered' => count($data_pelanggan),
            'data' => $data_pelanggan
        ]);
    }

    public function store(Request $request)
    {
        //
    }

    public function getProfileById($id)
    {
        $pelanggan = Pelanggan::find($id);

        return response()->json([
            'data' => $pelanggan
        ]);
    }

    public function update(Request $request)
    {
        $ids = $request['ids'];

        foreach ($ids as $id) {
            $pelanggan = DB::table('pelanggans')
                            ->where('id', $id)
                            ->first();

            if ($pelanggan->status_akun == 'tidak aktif') {
                Pelanggan::where('id', $id)
                        ->update(['status_akun' =>'aktif']);
            } elseif ($pelanggan->status_akun == 'aktif') {
                Pelanggan::where('id', $id)
                        ->update(['status_akun' => 'tidak aktif']);
            }
            
        }

        return response()->json([
            'message' => 'update status akun success'
        ]);
    }

    public function destroy(Request $request)
    {
        $ids = $request['ids'];

        foreach ($ids as $id) {
            Pelanggan::where('id', $id)->update([
                'deleted' => 1
            ]);
        }

        return response()->json([
            'message' => 'delete success'
        ]);
    }
}
