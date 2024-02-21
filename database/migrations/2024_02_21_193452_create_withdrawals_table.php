<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWithdrawalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('withdrawals', function (Blueprint $table) {
            $table->id();
            $table->string('telegram_username')->nullable();
            $table->integer('telegram_id')->nullable();
            $table->string('username')->nullable();
            $table->string('amount')->nullable();
            $table->string('account_no')->nullable();
            $table->string('account_name')->nullable();
            $table->boolean('status')->default(0);
            $table->string('handled_by')->nullable();
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
        Schema::dropIfExists('withdrawals');
    }
}

