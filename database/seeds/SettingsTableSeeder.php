<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Setting::create([
          'site_name'=> 'Laravel blog',
          'address' => 'Russia, Petersburg',
          'contact_number' => '088 329 6548',
          'contact_email' => 'info@gmail.com'
        ]);
    }
}
