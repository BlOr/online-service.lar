<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWorkTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('work', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_r')->default(0);
			$table->date('date')->default('0000-00-00');
			$table->text('text')->nullable();
			$table->integer('price')->default(0);
			$table->text('hard')->nullable();
			$table->integer('hard_price')->default(0);
			$table->integer('id_worker')->default(1);
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
		Schema::drop('work');
	}

}
