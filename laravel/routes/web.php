<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\App;
use App\Http\Middleware\kotuKelime;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//use ile controller yolunu belirterek route tanımlama
Route::get('/anasayfa', [App::class, 'index']);

//app providers routeserviceProvider da namespace kısmını yorum satırından çıkararak Route tanımlama
Route::get('/hakkimizda', 'App@hakkimizda');

//urlden veri yakalama
Route::get('/uye/{slug}', 'App@uye');
Route::get('/uye/{slug}/paylasimlar', 'App@paylasimlar');
//verinin gelme durummu opsyonese {id?} şeklinde tanımlıyoruz controller da veriyi fonsiyonda yakalarken default bir değer vermeliyiz index($slug,$id=null veya $id=1) gibi
Route::get('/uye/{slug}/paylasim/{id?}', 'App@paylasim');

//resource kullanımı
//url de urunler girilirse otomatik index fonk çalışır
Route::resource('urunler', 'App');

//Anasayfa route
Route::get('/home', 'HomeController@index');


//Route ,ile yakalanacak verinin tipi belli ise (Yas number gibi) 404 hatası vererek ekranın patlamasının önüne geçiliyor
//yazı gitilmesini istersek koşulumuz '[A-Za-z]+'
Route::get('/yas/{dogumyili}', 'App@index')->where('dogumyili','[0-9]+');
//ad string yas number olsun
Route::get('/uye/{ad}/{yas}', function ($ad, $yas){
    return "Merhaba ". $ad." yaşınız ".$yas;
})->where(['ad'=>'[A-Za-z]+', 'yas'=>'[0-9]+']);



//name kullanımı,
Route::get('/haberler', 'HomeController@index')->name('haber');
//name kullanmazsak view da a içerindeki href e aşağıdaki gibi yazılmalı
//href="{{url('/haberler')}}"

//name kullanılırsa
//href="{{route('haber)}}" şeklinde kullanılır



//name ile parametre gönderimi
Route::get('/kitap/{slug}','HomeController@index')->name('kitap');
//view da hrefte
//href="{{ route('kitap', 'kucukprens')}}"
//birden fazla ver göderimi varsa array içerisinde virgüller ile alınabilir



//route group
Route::get('/elektronik/telefon', 'HomeController@index');
Route::get('/elektronik/tablet', 'HomeController@index');
Route::get('/elektronik/kamera', 'HomeController@index');
//yukrıdaki tanımlamaların yerine
Route::prefix('electronik')->group(function (){
    Route::get('/telefon', 'HomeController@index');
    Route::get('/tablet', 'HomeController@index');
    Route::get('/kamera', 'HomeController@index');
});
//bunu kullanabiliriz


//Request örneği
Route::get('request', 'RequestController@iletisim')->name('iletisim');
Route::post('request/post', 'RequestController@post')->name('iletisim.post');


//Validatiın
Route::get('/kayit' , 'ValidationController@index')->name('validation');
Route::post('/kayitol', 'VAlidationController@kayit')->name('kayit')->middleware(kotuKelime::class);



//middleware
//conroller a gelmeden önce konrol amaçlı ara katman olarak kullandık.
//    kullanıcı iriş yapmamışsa admin sayfasına giremesin gibi kullanılabilir


//db
Route::get('/db', 'dbController@index')->name('db');



//model
Route::get('/model', 'dbController@model')->name('model');
