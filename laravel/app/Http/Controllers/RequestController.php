<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function iletisim(){
        return view("front.iletisim");
    }
    public function post(Request $request){
        dd($request->request);
    }
}
