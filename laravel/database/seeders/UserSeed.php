<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('user')->insert([
//            'name'=>'Büşra',
//            'email'=>'busra.kesr@gmail.com',
//            'password'=>md5('123456')
//
//        ]);
        //faker ile fake veri oluşturma
        $faker=Faker::create();
        for ($i=0;$i<=20;$i++){

            DB::table('user')->insert([
               'name'=>$faker->name,
                'email'=>$faker->email,
                'password'=>$faker->password,
                'age'=>rand(18,60),
                'gender'=>rand(0,1),
                ]);
        }
    }
}
