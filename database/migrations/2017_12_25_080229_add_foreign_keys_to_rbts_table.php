<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRbtsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('rbts', function(Blueprint $table)
		{
			$table->foreign('category_id', 'rbts_ibfk_1')->references('id')->on('categories')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('content_id', 'rbts_ibfk_2')->references('id')->on('contents')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('operator_id', 'rbts_ibfk_3')->references('id')->on('operators')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('rbts', function(Blueprint $table)
		{
			$table->dropForeign('rbts_ibfk_1');
			$table->dropForeign('rbts_ibfk_2');
			$table->dropForeign('rbts_ibfk_3');
		});
	}

}
