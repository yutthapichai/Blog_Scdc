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
        App\User::create([
            'name' => 'Yutth goes',
            'email' => 'cancelgo25@gmail.com',
            'password' => bcrypt('123456')
        ]);
    }
}
