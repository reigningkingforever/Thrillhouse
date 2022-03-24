<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class Items extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    //
    Schema::create('items', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('category_id');
      $table->string('name');
      $table->string('sku')->unique();
      $table->string('rating');
      $table->string('cost');
      $table->string('detail');
    });
    DB::table('items')->insert(array(
      array('id' => 1, 'category_id' => 1, 'name' => 'EAST/SMART Inverter', 'sku' => 'EASM24878921', 'rating' => '1000VA/12V', 'price' => '55000', 'detail' => 'Single Phased Sine Inverter' ),
      array('id' => 2, 'category_id' => 2, 'name' => 'EASTMAN TALL Battery', 'sku' => 'EMT48789267', 'rating' => '200AH/12V', 'price' => '120000', 'detail' => 'Tubular Battery' ),
      array('id' => 3, 'category_id' => 4, 'name' => 'Installation', 'sku' => '', 'rating' => '', 'price' => '10000', 'detail' => 'Total Package Installation' ),
      array('id' => 4, 'category_id' => 3, 'name' => 'MonoCrystalline Grade A', 'sku' => 'MCG48789217A', 'rating' => '170W', 'price' => '40000', 'detail' => 'MonoCrystalline Grade A Solar Panel' ),
      array('id' => 5, 'category_id' => 1, 'name' => 'EAST/SMART Inverter', 'sku' => 'EASM48789267', 'rating' => '11175VA/12V', 'price' => '65000', 'detail' => 'Single Phased Sine Inverter' ),
      array('id' => 6, 'category_id' => 2, 'name' => 'LUMINUS TUBULAR Battery', 'sku' => 'EMT47892834', 'rating' => '220AH/12V', 'price' => '130000', 'detail' => 'Tubular Battery' ),
      array('id' => 7, 'category_id' => 3, 'name' => 'MonoCrystalline Grade A', 'sku' => 'MCG48713427A', 'rating' => '170W', 'price' => '40000', 'detail' => 'MonoCrystalline Grade A Solar Panel' ),
      array('id' => 8, 'category_id' => 1, 'name' => 'EAST/SMART Inverter', 'sku' => 'EASM78925428', 'rating' => '1700VA/24V', 'price' => '78000', 'detail' => 'Single Phased Sine Inverter' ),
      array('id' => 9, 'category_id' => 2, 'name' => 'EASTMAN Tall Gel Battery', 'sku' => 'EMTG48789267', 'rating' => '220AH/12V', 'price' => '140000', 'detail' => 'Tubular Battery' ),
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
    Schema::drop('items');
  }
}
