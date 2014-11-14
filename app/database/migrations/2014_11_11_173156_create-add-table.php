<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('add', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('name', 255);
            $table->string('email', 255);
            $table->string('phone',255);
            $table->string('username',255);
            $table->string('password',255);


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
        Schema::drop('add', function(Blueprint $table)
        {
            //
        });
		//
	}

}
