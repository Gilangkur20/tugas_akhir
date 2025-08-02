<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;

class PenjualanApiController extends Controller
{
    public function index()
    {
        $penjualans = Penjualan::all();
        return response()->json([
            'message' => 'success','data' => $penjualans
        ]);
    }

    public function create()
    {
        // Logic to show the form for creating a new penjualan
    }

    public function store(Request $request)
    {
        $penjualan = Penjualan::create($request->all());
        return response()->json(['message' => 'Penjualan created successfully', 'data' => $penjualan], 201);
    }

    public function show($id)
    {
        $penjualan = Penjualan::find($id);

        if (!$penjualan) {
            return response()->json(['status' => false, 'message' => 'Data tidak ditemukan'], 404);
        }
        return response()->json(['status' => true, 'data' => $penjualan], 200);
    }
}
