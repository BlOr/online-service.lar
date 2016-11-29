<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWorkerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('worker', function(Blueprint $table)
		{
			$table->integer('id_worker', true);
			$table->char('worker', 15)->default('');
			$table->char('color', 6)->default('FFFFFF');
			$table->enum('hidden', array('N','Y'))->default('N');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('worker');
	}

}
