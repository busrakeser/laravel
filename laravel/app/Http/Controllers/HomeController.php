<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
//        view a verigönderme
//        1
//        return view('front.anasayfa',['ad'=>'Büşra']);

//        2
//        $data['ad']="Büşra";
//        return view('front.anasayfa', $data);

//        3
//        return view('front.anasayfa')->with('ad','Büşra');

        $data['names'] = ['Ahmet', 'Mehmet', 'Ali'];
        $data['blog'] = "<b>Html tagleri ile veri gönderme</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam assumenda corporis harum in modi mollitia natus pariatur reprehenderit. Asperiores dicta ducimus eaque enim est et hic, id itaque iure laborum magni maiores maxime nesciunt non obcaecati officia optio porro quidem quod ratione recusandae, repellat, suscipit ullam ut vel velit voluptatum.";
        return view('front.anasayfa')->with($data);
    }
}
