<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class roles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(
            ['name'=>'Super Admin'],
            ['name'=>'Admin']);
    }
}
