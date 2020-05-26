<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class payment extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payments')->insert([
            "code" => "cash",
            "name" => "Cash on Deliver",
            "is_active" => 1
        ],
            [
                "code" => "stripe",
                "name" => "Credit Card",
                "is_active" => 0
            ]);
    }
}
