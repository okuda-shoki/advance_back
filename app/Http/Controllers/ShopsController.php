<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ShopsController extends Controller
{
    public function get()
    {
        $items=Shop::all();
        return response()->json([
            'message'=>'OK',
            'data'=>$items
        ],200);
    }

    public function show($shop_id)
    {
        if ($shop_id) {
            $items = DB::table('shops')->where('id', $shop_id)->first();
            return response()->json([
                'message' => 'User got successfully',
                'data' => $items
            ], 200);
        } else {
            return response()->json(['status' => 'not found'], 404);
        }
    }
}
