<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToContentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('contents', function(Blueprint $table)
		{
			$table->foreign('type_id', 'contents_ibfk_1')->references('id')->on('types')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('user_id', 'contents_ibfk_2')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('contents', function(Blueprint $table)
		{
			$table->dropForeign('contents_ibfk_1');
			$table->dropForeign('contents_ibfk_2');
		});
	}

}
