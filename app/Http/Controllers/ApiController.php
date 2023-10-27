<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Request;
class ApiController extends Controller
{
    //
    public function get(){
         return response()->json(['msg'=>'ok',200]);
    }
    public function post(){
        return response()->json([Request::all()],201);
    }

    public function update($id){

        return response()->json(['id'=>$id, Request::all()],200);
    }
    public function delete($id){
        return response()->json(['id'=>$id],200);
    }

}
