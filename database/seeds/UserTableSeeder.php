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
            'name' => env('USER_NAME'),
            'email' => env('USER_EMAIL'),
            'password' => bcrypt(env('USER_PASS')),
            'email_verified_at' => '2019-03-01',
        ]);
    }
}
