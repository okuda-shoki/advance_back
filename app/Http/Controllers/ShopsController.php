<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\Area;
use App\Models\Genre;
use Illuminate\Support\Facades\DB;

class ShopsController extends Controller
{
    public function get()
    {
        $items=Area::with('shops')->get();
        $genre=Genre::with('shops')->get();
        return response()->json([
            'message'=>'OK',
            'data'=>$items,
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
