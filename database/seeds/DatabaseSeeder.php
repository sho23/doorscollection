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
        $this->call(CategoryTableSeeder::class);

        // only for test
        $this->call(UserTableSeeder::class);
        $this->call(EntrancesTableSeeder::class);
        $this->call(AlterEntrancesTableSeeder::class);
    }
}
