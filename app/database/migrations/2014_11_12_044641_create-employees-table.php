<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('employees', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('name', 255);
            $table->string('email', 255);
            $table->string('phone',255);
            $table->string('address',255);
            $table->string('city',255);


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
        Schema::drop('employees', function(Blueprint $table)
        {
            //
        });
		//
	}

}
