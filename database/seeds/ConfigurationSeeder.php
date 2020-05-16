<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ConfigurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('configurations')->insert([
            'restaurant_name' => 'Classic Hotel',
            'terms_conditions' => 'Nothing for now',
            'sms_number' => '250788708212',
            'email' => 'ndasilver@gmail.com',
            'currency_id' => 1,
    ]);
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'role_id' => 1,
            'password' => Hash::make('admin123')
        ]);
    }
}
