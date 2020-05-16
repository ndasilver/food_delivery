<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class curreny_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('currencies')->insert([
            'currency_code' => 'USD',
            'currency_name' => 'US Dollars',
        ]);
    }
}
