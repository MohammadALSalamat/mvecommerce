<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userSeedr extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert user as an admin  
        DB::table('users')->insert([
            'full_name'=>'Mohammad user',
            'username'=>'admin',
            'email'=>'abusare45@gmail.com',
            'password'=>Hash::make('12345'),
            'status'=>'active'


        ]);
        //insert user as an admin  
        DB::table('sellers')->insert([
            'full_name'=>'Mohammad seller',
            'username'=>'admin',
            'email'=>'abosare46@gmail.com',
            'password'=>Hash::make('12345'),
            'status'=>1


        ]);
        //insert user as an admin  
        DB::table('adminviews')->insert([
            'full_name'=>'Mohammad admin',
            'email'=>'alomda.alslmat@gmail.com',
            'password'=>Hash::make('12345'),
            'status'=>1


        ]);
    }
}
