<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** these seeds wouldn't be in production however, they fill it with filler */
        DB::table('users')->insert([
            'name' => 'User',
            'email' => 'user@email.com',
            'status' => 2,
            'password' => bcrypt('password'),
        ]);
    }
}
