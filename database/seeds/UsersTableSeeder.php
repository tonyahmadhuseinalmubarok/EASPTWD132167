<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id'=>1,
                'name'=>'Admin',
                'email'=>'admin@gmail.com',
                'password'=>Hash::make('admin123'),
                'role'=>'Admin'
            ],
            [
                'id'=>2,
                'name'=>'Tony ',
                'email'=>'tony@gmail.com',
                'password'=>Hash::make('tony123'),
                'role'=>'Customer'
            ],
            [
                'id'=>3,
                'name'=>'Mifta',
                'email'=>'mifta@gmail.com',
                'password'=>Hash::make('mifta123'),
                'role'=>'Customer'
            ],
            [
                'id'=>4,
                'name'=>'Anwar',
                'email'=>'anwar@gmail.com',
                'password'=>Hash::make('anwar123'),
                'role'=>'Customer'
            ],
        ]);
    }
}