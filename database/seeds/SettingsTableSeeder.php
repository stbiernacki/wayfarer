<?php

use App\Models\Setting;
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

        if (Schema::hasTable('settings')) {
            DB::table('settings')->truncate();
            Setting::updateOrCreate([
                'key' => 'locale',
                'value' => 'en'
            ]);
        }

    }
}
