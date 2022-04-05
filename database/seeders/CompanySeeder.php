<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'name'              => 'Lotus Cable',
            'title'             => 'Fulfil your Internet of Things',
            'description'       => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged",
            'address'           => '23/9 Zigatola, Dhanmondi, Dhaka - 1206, Bangladesh',
            'web_address'       => 'https://www.lotuscable.com',
            'email'             => 'lotus_cable@mail.com',
            'phone'             => '01621939971',
            'logo'              => 'default_logo.png',
            'favicon'           => 'default_favicon.png',
            'google_map_link'   => 'https://goo.gl/maps/1s9Yziox5nRYQp4Y6',
            'fb_page_link'      => 'https://www.facebook.com',
            'created_at'        => Carbon::now(),
        ]);
    }
}
