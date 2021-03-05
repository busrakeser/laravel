<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidationController extends Controller
{
    public function index(){
        return view('kayit');
    }
    public function kayit(Request $request){
//        dd($request->request);
//        validation kurallarımızı tanımladık
        $request->validate([
            'ad'=>'required | min:3',
            'email' =>'required  | email',
//            girilen iki şifrenin de aynı olma kontrolü confirmed validate içerisinde yazılıp şifre2 nin name kısmı sifre_confirmation yapılmalı
            'sifre'=>'required | min:6 | confirmed',
            'sifre_confirmation'=>'required | min:6 '
        ]);
        echo "kuralları geçti";
    }
}
