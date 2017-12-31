<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('posts', function(Blueprint $table)
		{
			$table->foreign('content_id', 'posts_ibfk_1')->references('id')->on('contents')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('operator_id', 'posts_ibfk_2')->references('id')->on('operators')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('user_id', 'posts_ibfk_3')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('posts', function(Blueprint $table)
		{
			$table->dropForeign('posts_ibfk_1');
			$table->dropForeign('posts_ibfk_2');
			$table->dropForeign('posts_ibfk_3');
		});
	}

}
