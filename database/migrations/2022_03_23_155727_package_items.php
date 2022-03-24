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
    Schema::create('packageitems', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->unsignedBigInteger('package_id');
      $table->unsignedBigInteger('item_id');
      $table->string('count');
    });
    DB::table('packageitems')->insert(array(
      array('id' => 1, 'package_id' => 1, 'item_id' => 1, 'count' => '1'),
      array('id' => 2, 'package_id' => 1, 'item_id' => 2, 'count' => '1'),
      array('id' => 3, 'package_id' => 1, 'item_id' => 3, 'count' => '1'),
      array('id' => 4, 'package_id' => 2, 'item_id' => 1, 'count' => '1'),
      array('id' => 5, 'package_id' => 2, 'item_id' => 2, 'count' => '2'),
      array('id' => 6, 'package_id' => 2, 'item_id' => 3, 'count' => '1'),
      array('id' => 7, 'package_id' => 3, 'item_id' => 1, 'count' => '1'),
      array('id' => 8, 'package_id' => 3, 'item_id' => 2, 'count' => '3'),
      array('id' => 9, 'package_id' => 3, 'item_id' => 3, 'count' => '1'),
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
    Schema::drop('packageitems');
  }
}
