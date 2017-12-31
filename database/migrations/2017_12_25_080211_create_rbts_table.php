<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRbtsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rbts', function(Blueprint $table)
		{
            $table->engine = "InnoDB";
			$table->integer('id', true);
			$table->integer('content_id')->index('content_id');
			$table->integer('category_id')->index('category_id');
			$table->boolean('published');
			$table->boolean('free');
			$table->integer('operator_id')->index('operator_id');
			$table->integer('rbt_code');
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
		Schema::drop('rbts');
	}

}
