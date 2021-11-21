<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel; 
use DB;


class UserController extends Controller
{
    public function updateSummary(Request $request){                  
        $user = UserModel::find($request->input('id'));
        $user->summary = $request->input('summary'); 
        $result = $user->save();
        return response()->json(['success'=>'Summary Has Been Updated.', 'summary'=>$request->input('summary')]);              

    }

    public function getSummary(Request $request){
        $summary = DB::table('users')->select('summary')->where('id', $request->input('id'))->get();
        return response()->json(['success'=>$summary[0]]);              
    }
}
