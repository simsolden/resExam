<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //Empty the table first
         DB::statement('SET FOREIGN_KEY_CHECKS=0');
         User::truncate();
         DB::statement('SET FOREIGN_KEY_CHECKS=1');

        $password = Hash::make('epfcepfc');
        //Define data
        $users = [
            [
                'name'=> 'Bob Sull',
                'email'=> 'bob@sull.com',
                'password'=> $password,
            ],
            [
                'name'=> 'Cédryc Ruth',
                'email'=> 'ced@sull.com',
                'password'=> $password,
            ],
        ];

        //Insert data in the table
        DB::table('users')->insert($users);
    }
}
