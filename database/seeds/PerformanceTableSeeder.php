<?php

use App\Models\Performance;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class PerformanceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Schema::hasTable('performances')) {
            DB::table('performances')->truncate();
            factory(Performance::class, 500)->create();
        }
    }
}
