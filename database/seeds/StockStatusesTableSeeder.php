<?php

use App\Models\StockStatus;
use Illuminate\Database\Seeder;

class StockStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Schema::hasTable('stock_statuses')) {
            DB::table('stock_statuses')->truncate();
            factory(StockStatus::class, 15)->create();
        }
    }
}
