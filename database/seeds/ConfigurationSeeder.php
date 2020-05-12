<?php

use Illuminate\Database\Seeder;

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
    }
}
