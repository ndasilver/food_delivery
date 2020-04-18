<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class status extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::drop('statuses');
        DB::table('statuses')->insert([
            'id'=> 1,
            'code' => 0,
            'name' => 'Not approved',
        ],[
            'id' => 2,
            'code' => 1,
            'name' => 'Approved',
        ],[
            'id' => 3,
            'code' => 2,
            'name' => 'Rejected',
        ]);
    }
}
