<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradeHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trade_history', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('currency_pair')->nullable();
            $table->enum('position', ['buy', 'sell'])->nullable();
            $table->decimal('lot', 10, 0)->nullable();
            $table->string('start_time')->nullable();
            $table->decimal('start_price', 10, 0)->nullable();
            $table->string('end_time')->nullable();
            $table->decimal('end_price', 10, 0)->nullable();
            $table->decimal('profit', 10, 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trade_history');
    }
}
