<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepositsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deposits', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('user_email')->nullable();
            $table->string('full_name')->nullable();
            $table->decimal('deposit_amount', 10, 0)->nullable();
            $table->timestamp('deposit_time')->useCurrent();
            $table->enum('status', ['pending', 'active'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deposits');
    }
}
