<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOperatorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('operators', function(Blueprint $table)
		{
            $table->engine = "InnoDB";
			$table->integer('id', true);
			$table->string('title', 100);
			$table->integer('operator_code');
			$table->string('operator_image', 100);
			$table->integer('country_id')->index('country_id');
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
		Schema::drop('operators');
	}

}
