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
      $table->string('power');
    });
    DB::table('appliances')->insert(array(
      array('id' => 1, 'name' => 'TV', 'power' => 100),
      array('id' => 2, 'name' => 'Fridge', 'power' => 100),
      array('id' => 3, 'name' => 'Laptop', 'power' => 90),
      array('id' => 4, 'name' => 'Iron', 'power' => 50),
      array('id' => 5, 'name' => 'Cooker', 'power' => 50),
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
