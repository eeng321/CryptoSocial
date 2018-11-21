<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTradeRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trade_replies', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('trade_id');
            $table->unsignedInteger('user_id');
            $table->foreign('trade_id')->references('id')->on('trades');
            $table->foreign('user_id')->references('id')->on('users');
            $table->mediumText('content');
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
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('trade_replies');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
