<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Sho',
            'email' => 'test@test.com',
            'password' => bcrypt('testpass'),
            'email_verified_at' => '2019-03-01',
        ]);
    }
}
