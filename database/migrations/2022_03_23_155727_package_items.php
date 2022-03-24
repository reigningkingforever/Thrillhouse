<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class PackageItems extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    //
    Schema::create('package_items', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->unsignedBigInteger('package_id');
      $table->unsignedBigInteger('item_id');
      $table->string('quantity');
      $table->timestamps();
      $table->foreign('package_id')->references('id')->on('packages')->onDelete('cascade');
      $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');
    });
    DB::table('package_items')->insert(array(
      array('id' => 1, 'package_id' => 1, 'item_id' => 1, 'quantity' => '1'),
      array('id' => 2, 'package_id' => 1, 'item_id' => 2, 'quantity' => '1'),
      array('id' => 3, 'package_id' => 1, 'item_id' => 3, 'quantity' => '1'),
      array('id' => 4, 'package_id' => 2, 'item_id' => 1, 'quantity' => '1'),
      array('id' => 5, 'package_id' => 2, 'item_id' => 2, 'quantity' => '2'),
      array('id' => 6, 'package_id' => 2, 'item_id' => 3, 'quantity' => '1'),
      array('id' => 7, 'package_id' => 3, 'item_id' => 1, 'quantity' => '1'),
      array('id' => 8, 'package_id' => 3, 'item_id' => 2, 'quantity' => '3'),
      array('id' => 9, 'package_id' => 3, 'item_id' => 3, 'quantity' => '1'),
    ));
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    //
    Schema::drop('package_items');
  }
}
