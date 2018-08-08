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
        $user = App\User::create([
            'name' => 'Yutth goes',
            'email' => 'cancelgo25@gmail.com',
            'password' => bcrypt('123456'),
            'admin' => 1
        ]);

        App\Profile::create([
          'user_id' => $user->id,
          'avatar' => 'uploads/avatar/yut.png',
          'about' => 'hello world',
          'facebook' => 'facebook.com',
          'youtube' => 'youtube.com'
        ]);
    }
}
