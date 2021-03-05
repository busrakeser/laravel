<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
//kullanacağımız modeli ekliyoruz
use App\Models\User;

class dbController extends Controller
{
    public function index(){
//        return "Merhaba";
//       $users =DB::table('user')->get();
//       dd($users);

//        bu sekilde array döner
//        $user=DB::table('user')->where('id',9)->get();
//        dd($user);

//        eğer id üzerinden bir veri bulunacaksa find kullanılailir
//        $user=DB::table('user')->find(9);
//        dd($user);

//        bu şekilde object nesne olarak döndürür
//        first ile çağırıldığında elemanlara daha kolay ulaşılır
//        $user=DB::table('user')->where('id',9)->first();
//        dd($user);
//        dd($user->name);


//        yaşı 30 dan büyük kişiileri versin
//        $user=DB::table('user')->where('age', '>=', '30')->get();
//        dd($user);


//        yaşı 30 dan büyük kadınları listelem
//        $user=DB::table('user')->where('age','>', '30')->where('gender','0')->get();
//        dd($user);

//        yaşı 30 dan küçük kaç kişi var
//        $user=DB::table('user')->where('age', '<' ,'30')->count();
//        dd($user);


//        30 yasından küçük kişilerin adı
//        $user=DB::table('user')->where('age', '<' ,'30')->count();
//        foreach ($users as $item){
//            echo $item->name;
//        }


//        veritabanından çekilen verileri frontend e gönderme
//        $user=DB::table('user')->where('age', '<' ,'30')->get();
//        return view('kayit', ['user'=>$user]);
//
//
//
//        veritabanına veriekleme
//        DB::table('user')->insert([
//           'name'=>'Büşra',
//           'email'=>'busra@html.com',
//           'age'=>23,
//           'gender'=>0,
//           'password'=>md5(102030)
//        ]);


//        verigüncelleme
//        DB::table('user')->where('id', 15)->update([
//           'name'=>'busra',
//        ]);


//        yaşa göre sıralı listeleme
//        $list=DB::table('user')->orderBy('age','ASC')->get();
//        dd($list);



//        vertabanından silme
//        DB::table('user')->where('id', 21)->delete();


    }

    //        Model işlemleri
    public function model(){
//        $users=User::all();
//        dd($users);

//        echo $users=User::where('age', '>' , '30')->count();

//        yeni satır ekleme
//        $user=new User;
//        $user->name='ali';
//        $user->email='ali@dsg.vom';
//        $user->age=55;
//        $user->password=md5(145869);
//        $user->gender=1;
//        $user->save();


//        22 id li kişiye ulaşma
//        $user=User::find(22);
//        dd($user);


//        güncelleme
//        User::where('id',22)->update([
//            'name'=>'ayşe'
//        ]);


        

    }
}
