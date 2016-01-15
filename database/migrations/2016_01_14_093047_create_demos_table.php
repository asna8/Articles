<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('demos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('Univ_Rollno');
			$table->string('Name');
			$table->string('Branch');
			$table->string('Year');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('demos');
	}

}
