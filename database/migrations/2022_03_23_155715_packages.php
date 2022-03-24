<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class Packages extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    //
    Schema::create('packages', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('name');
      $table->string('type');
      $table->string('price');
      $table->string('details');
    });
    DB::table('packages')->insert(array(
      array('id' => 1, 'name' => 'ThrillLITE', 'price' => '200000', 'type' => 'A' ,'details' => 'Good for single individuals with basic appliances'),
      array('id' => 2, 'name' => 'ThrillLITE', 'price' => '210000', 'type' => 'B' ,'details' => 'Good for single individuals with basic appliances'),
      array('id' => 3, 'name' => 'ThrillLITE', 'price' => '232500', 'type' => 'C' ,'details' => 'Good for single individuals with basic appliances'),
      array('id' => 4, 'name' => 'ThrillREGULAR', 'price' => '360000', 'type' => 'A' ,'details' => 'Good for single individuals with medium sized appliances'),
      array('id' => 5, 'name' => 'ThrillREGULAR', 'price' => '380000', 'type' => 'B' ,'details' => 'Good for single individuals with medium sized appliances'),
      array('id' => 6, 'name' => 'ThrillREGULAR', 'price' => '425500', 'type' => 'C' ,'details' => 'Good for single individuals with medium sized appliances'),
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
    Schema::drop('packages');
  }
}
