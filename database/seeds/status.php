<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class status extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
            'code' => 0,
            'name' => 'Not approved',
        ],[
            'code' => 1,
            'name' => 'Approved',
        ],[
            'code' => 2,
            'name' => 'Rejected',
        ]);
    }
}
