<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
         $this->call(roles::class);
         $this->call(status::class);
         $this->call(payment::class);
         $this->call(side_dish::class);
         $this->call(curreny_seed::class);
         $this->call(ConfigurationSeeder::class);
    }
}
