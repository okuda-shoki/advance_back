<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function get($user_id)
    {
        if($user_id){
            $items=DB::table('users')->where('id',$user_id)->first();
            return response()->json([
                'message'=>'User got successfully',
                'data'=>$items
            ],200);
        }else{
            return response()->json(['status'=>'not found'],404);
        }
    }
}

