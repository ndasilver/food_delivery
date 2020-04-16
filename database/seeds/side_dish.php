<?php

use Illuminate\Database\Seeder;

class side_dish extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('side_dishes')->insert([
        "name" => "Chips"
    ]);
    }
}
