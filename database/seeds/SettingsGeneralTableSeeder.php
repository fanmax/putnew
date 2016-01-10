<?php

use Illuminate\Database\Seeder;
use PutNew\Backend\Models\SettingsGeneral;

class SettingsGeneralTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SettingsGeneral::truncate();

        SettingsGeneral::create([
            'site_name' => 'PutNew',
            'site_description' => 'You new site',
            'timezone_string' => 'UTC-3'
        ]);
    }
}
