<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class Appliances extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    //
    Schema::create('appliances', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('name');
      $table->string('power_unit');
      $table->timestamps();
    });
    DB::table('appliances')->insert(array(
      array('id' => 1, 'name' => 'Bulb', 'power_unit' => 'watts'),
      array('id' => 2, 'name' => 'TV', 'power_unit' => 'watts'),
      array('id' => 3, 'name' => 'Laptop', 'power_unit' => 'watts'),
      array('id' => 4, 'name' => 'Fan', 'power_unit' => 'watts'),
      array('id' => 5, 'name' => 'Decoder', 'power_unit' => 'watts'),
      array('id' => 6, 'name' => 'Fridge', 'power_unit' => 'watts'),
      array('id' => 7, 'name' => 'Freezer', 'power_unit' => 'watts'),
      array('id' => 8, 'name' => 'Pumping Machine', 'power_unit' => 'hp'),
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
    Schema::drop('appliances');
  }
}
