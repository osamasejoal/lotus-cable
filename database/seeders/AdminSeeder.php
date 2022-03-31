<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Yasir Arafat Osama',
            'email' => 'osama@mail.com',
            'password' => Hash::make('osama@mail.com'),
            'image' => 'default.png',
            'phone' => '01021939971',
            'gender' => '1',
            'address' => 'Dhanmondi, Dhaka -1206, Bangladesh',
            'type' => '1',
            'created_at' => Carbon::now(),
        ]);

    }
}
