<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Orders extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    //
    Schema::create('orders', function (Blueprint $table) {
      $table->bigIncrements('id'); //Package Id
      $table->unsignedBigInteger('customer_id');
      $table->double('total');
      $table->timestamps();
      $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
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
    Schema::drop('orders');
  }
}
