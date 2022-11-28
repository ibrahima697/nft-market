<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
           DB::table('users')->insert([
            [ 
            'name' => 'ibrahim',
            'email' => 'ibrahima@gmail.com',
            'password' => bcrypt('password'),
            'wallet' => 1000,
           ],
           [
            'name' => 'guisse',
            'email' => 'guisse@gmail.com',
            'password' => bcrypt('password'),
            'wallet' => 1000,
           ],
           [
            'name' => 'mohamed',
            'email' => 'mohamed@gmail.com',
            'password' => bcrypt('password'),
            'wallet' => 1000,
              ],
           [
            'name' => 'pogba',
            'email' => 'papa@gmail.com',
            'password' => bcrypt('password'),
            'wallet' => 1000,

           ],
              [
            'name' => 'papa',
            'email' => 'pogba@gmail.com',
            'password' => bcrypt('password'),
            'wallet' => 1000,
            ]
        ]);
    }
}
