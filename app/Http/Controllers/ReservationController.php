<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ReservationController extends Controller
{
    public function post(Request $request)
    {
      $now=carbon::now();
      $param=[
        "shop_id"=>$request->shop_id,
        "user_id"=>$request->user_id,
        "date"=>$request->date,
        "time"=>$request->time,
        "number"=>$request->number,
        "created_at"=>$now,
        "updated_at"=>$now
      ];
      DB::table('reservations')->insert($param);
      return response()->json([
        'message'=>'Comment created successfully',
        'data'=>$param
      ],200);
    }

    public function delete(Request $request)
    {
      DB::table('reservations')->where('id',$request->id)->delete();
      return response()->json([
        'message'=>'reservation deleted successfully',
      ],200);
    }

    public function get($user_id)
    {
      if($user_id){
        $item=Reservation::where('user_id',$user_id)->get();
      return response()->json([
        'message' => 'User got successfully',
        'item' => $item
      ], 200);
      } else {
      return response()->json(['status' => 'not found'], 404);
    }
    }
}
