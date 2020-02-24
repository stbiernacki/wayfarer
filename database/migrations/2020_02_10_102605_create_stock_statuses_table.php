<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_statuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('external_id')->nullable()->unique();
            $table->string('code')->unique();
            $table->string('name', 100);
            $table->text('description');
            $table->decimal('quantity', 10, 4)->unsigned()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stock_statuses');
    }
}
