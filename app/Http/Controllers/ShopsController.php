<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use Illuminate\Support\Facades\DB;

class ShopsController extends Controller
{
    public function get()
    {
        $items=Shop::with('area','genre')->get();
        return response()->json([
            'message'=>'OK',
            'data'=>$items
        ]);
    }

    public function show($shop_id)
    {
        if ($shop_id) {
            $data
            = Shop::with('area', 'genre','like')->where('id', $shop_id)->first();
            return response()->json([
                'message' => 'User got successfully',
                'item' => $data
            ], 200);
        } else {
            return response()->json(['status' => 'not found'], 404);
        }
    }
}