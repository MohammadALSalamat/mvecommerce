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
            'full_name'=>'Mohammad admin',
            'username'=>'admin',
            'email'=>'alomda.alslmat@gmail.com',
            'password'=>Hash::make('12345'),
            'role'=>'admin',
            'status'=>'active'


        ],
        //insert user as a vendor
        [
                'full_name' => 'ahmad vendor',
                'username' => 'vendor',
                'email' => 'alomda.alslmat1@gmail.com',
                'password' => Hash::make('12345'),
                'role' => 'vendor',
                'status' => 'active'
        ],
            //insert user as a customer
            [
                'full_name' => 'ahmad customer',
                'username' => 'customer',
                'email' => 'alomda.alslmat2@gmail.com',
                'password' => Hash::make('12345'),
                'role' => 'customer',
                'status' => 'active'
            ],
    );
    }
}
