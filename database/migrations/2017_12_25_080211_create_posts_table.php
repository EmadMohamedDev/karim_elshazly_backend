<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function(Blueprint $table)
		{
            $table->engine = "InnoDB";
			$table->integer('id', true);
			$table->integer('content_id')->index('content_id');
			$table->integer('operator_id')->index('operator_id');
			$table->date('Published_Date');
			$table->boolean('Published');
			$table->boolean('Free');
			$table->integer('user_id')->unsigned()->index('user_id');
			$table->string('post_image', 100);
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
		Schema::drop('posts');
	}

}
