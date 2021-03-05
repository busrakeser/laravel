<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class App extends Controller
{
//    public function index(){
//        return("anasayfa");
//    }
    public function hakkimizda(){
        return("hakkımızda");
    }
    public function uye($uye){
        return $uye;
    }
    public function paylasimlar($uye){
        return $uye."'e ait paylaşımlar";
    }
    public function paylasim($uye, $id){
        return $uye."'e ait ". $id ." id'li paylaşım";
    }

    //resource kullanımı

    public function index(){
        return"urunler";
    }
    public function show($urun){
//        urunler/{$urun} şeklinde bir gösterim sağlar
        return $urun;
    }
}
