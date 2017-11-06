<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePayments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if (!Schema::hasTable('payments')) {
        Schema::create('payments', function (Blueprint $table) {
          $table->increments('id');
          $table->integer("user_id")->unsigned();
          $table->integer("link_id")->unsigned();
          $table->timestamps();

          $table->foreign('user_id')->references('id')->on('users');
          $table->foreign('link_id')->references('id')->on('links');
        });
      }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (!Schema::hasTable('payments')) {
          Schema::drop('payments');
        }
    }
}
