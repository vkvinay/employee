<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {
        Schema::create('admin', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('username', 255);
            $table->string('password', 255);


            $table->timestamps();
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('admin', function(Blueprint $table)
        {
            //
        });	//
    }

}
