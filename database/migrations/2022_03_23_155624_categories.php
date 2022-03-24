<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class Categories extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    //
    Schema::create('categories', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('name');
      $table->string('details');
      $table->timestamps();
    });
    DB::table('categories')->insert(array(
      array('id' => 1, 'name' => 'Inverters', 'details' => 'Controls the entire system'),
      array('id' => 2, 'name' => 'Inverter Batteries', 'details' => 'Batteries get changed and can then be used'),
      array('id' => 3, 'name' => 'Solar Panels', 'details' => 'The solar panel to get charge'),
      array('id' => 4, 'name' => 'Labour', 'details' => 'Installation and maintainance'),
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
    Schema::drop('categories');
  }
}
