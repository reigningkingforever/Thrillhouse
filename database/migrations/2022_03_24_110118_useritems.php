<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Useritems extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    //
    Schema::create('useritems', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('item_id');
      $table->string('user_id');
      $table->string('order_id');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    //
    Schema::drop('useritems');
  }
}
