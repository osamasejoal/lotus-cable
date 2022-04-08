<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionTypeSeeder extends Seeder
{

    public function run()
    {

        DB::table('transaction_types')->insert([
            'name'       => 'Monthly Payment',
            'amount'     => '0',
        ]);


        DB::table('transaction_types')->insert([
            'name'       => 'Tranasfer charge',
            'amount'     => '200',
        ]);


        DB::table('transaction_types')->insert([
            'name'       => 'Previous due',
            'amount'     => '10',
        ]);


        DB::table('transaction_types')->insert([
            'name'       => '512Kbps Registration',
            'amount'     => '300',
        ]);


        DB::table('transaction_types')->insert([
            'name'       => '1Mbps Registration',
            'amount'     => '500',
        ]);

    }
}
