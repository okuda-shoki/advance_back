<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LikesController extends Controller
{
    public function post(Request $request)
    {
    $now=Carbon::now();
    $param=[
        "shop_id"=>$request->shop_id,
        "user_id"=>$request->user_id,
        "created_at"=>$now,    
        "updated_at"=>$now
    ];
    DB::table('likes')->insert($param);
    return response()->json([
        'message'=>'Like created successfully',
        'data'=>$param
    ],200);
}
public function delete(Request $request)
{
  $param=[
            "shop_id" => $request->shop_id,
            "user_id" => $request->user_id
  ];
        DB::table('likes')->delete($param);
        return response()->json([
            'message' => 'Like created successfully',
            'data' => $param
        ], 200);
}

public function get($user_id)
{
    if($user_id){
        $item=Like::where('user_id',$user_id)->get();
    return response()->json([
        "message"=>'like got successfully',
        'items'=>$item
    ]);
}else{
    return response()->json([
        'status'=>'not found'
    ],400);
}
}
}