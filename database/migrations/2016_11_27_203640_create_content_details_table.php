<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('content_details', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('content_id')->unsigned();
			$table->string('key');
			$table->text('value');
			$table->timestamps();

			$table->foreign('content_id')
                ->references('id')->on('contents')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('content_details');
	}

}
