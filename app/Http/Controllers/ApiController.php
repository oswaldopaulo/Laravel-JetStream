<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Request;
class ApiController extends Controller
{
    //
    public function get(){
         return response()->json(['msg'=>'ok',200]);
    }
    public function post(Request $r){
        return response()->json([$r->all()],201);
    }

    public function update(Request $r,$id){
        return response()->json(['id'=>$id],200);
    }
    public function delete(Request $r,$id){
        return response()->json(['id'=>$id],200);
    }

}
