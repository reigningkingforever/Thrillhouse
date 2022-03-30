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
      $table->string('amount')->default(0);
      $table->string('details');
      $table->timestamps();
    });
    DB::table('items')->insert(array(
      array('id' => 1, 'category_id' => 1, 'name' => 'EAST/SMART Inverter', 'sku' => 'EASM24878921', 'rating' => '1000VA/12V', 'amount' => '55000', 'details' => 'Single Phased Sine Inverter' ),
      array('id' => 2, 'category_id' => 2, 'name' => 'EASTMAN TALL Battery', 'sku' => 'EMT48789267', 'rating' => '200AH/12V', 'amount' => '120000', 'details' => 'Tubular Battery' ),
      array('id' => 3, 'category_id' => 4, 'name' => 'Installation', 'sku' => '', 'rating' => '', 'amount' => '10000', 'details' => 'Total Package Installation' ),
      array('id' => 4, 'category_id' => 3, 'name' => 'MonoCrystalline Grade A', 'sku' => 'MCG48789217A', 'rating' => '170W', 'amount' => '40000', 'details' => 'MonoCrystalline Grade A Solar Panel' ),
      array('id' => 5, 'category_id' => 1, 'name' => 'EAST/SMART Inverter', 'sku' => 'EASM48789267', 'rating' => '11175VA/12V', 'amount' => '65000', 'details' => 'Single Phased Sine Inverter' ),
      array('id' => 6, 'category_id' => 2, 'name' => 'LUMINUS TUBULAR Battery', 'sku' => 'EMT47892834', 'rating' => '220AH/12V', 'amount' => '130000', 'details' => 'Tubular Battery' ),
      array('id' => 7, 'category_id' => 3, 'name' => 'MonoCrystalline Grade A', 'sku' => 'MCG48713427A', 'rating' => '170W', 'amount' => '40000', 'details' => 'MonoCrystalline Grade A Solar Panel' ),
      array('id' => 8, 'category_id' => 1, 'name' => 'EAST/SMART Inverter', 'sku' => 'EASM78925428', 'rating' => '1700VA/24V', 'amount' => '78000', 'details' => 'Single Phased Sine Inverter' ),
      array('id' => 9, 'category_id' => 2, 'name' => 'EASTMAN Tall Gel Battery', 'sku' => 'EMTG48789267', 'rating' => '220AH/12V', 'amount' => '140000', 'details' => 'Tubular Battery' ),
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
