<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class UserSeeder extends Seeder
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
                'id' => 1,
                'name' => 'Super Admin',
                'email' => 'aboobakurusuhail@gmail.com',
                'password' => Hash::make('aboobakurusuhail')
            ],
            [
                'id' => 2,
                'name' => 'Api Manager',
                'email' => 'api@test.com',
                'password' => Hash::make(1234)
            ],

        ]);
    }
}
