<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('value')->nullable();
            $table->timestamps();
        });
        DB::table('settings')->insert(array(
            array('id' => 1, 'name'=> 'Company Name', 'value'=> 'Company Name'),
            array('id' => 2, 'name'=> 'tagline', 'value'=> 'company tagline'),
            array('id' => 3, 'name'=> 'logo', 'value'=> 'logo'),
            array('id' => 4, 'name'=> 'color', 'value'=> '#eee'),
            array('id' => 5, 'name'=> 'currency_name', 'value'=> 'Naira'),
            array('id' => 6, 'name'=> 'currency_symbol', 'value'=> '₦'),
            array('id' => 7, 'name'=> 'email_customer', 'value'=> 1),
            array('id' => 8, 'name'=> 'email_admin', 'value'=> 1),
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
