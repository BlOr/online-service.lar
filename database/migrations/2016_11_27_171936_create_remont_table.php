<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRemontTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('repair', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('pass')->nullable();
			$table->date('date')->default('0000-00-00');
			$table->string('string', 10)->default('NNNNNNNNNN');
			$table->integer('id_client')->default(0);
			$table->text('client_fio')->nullable();
			$table->text('client_tel')->nullable();
			$table->integer('id_model')->nullable();
			$table->text('complect')->nullable();
			$table->text('defect')->nullable();
			$table->text('serial')->nullable();
			$table->integer('counter')->nullable()->default(0);
			$table->integer('id_prin')->default(0);
			$table->integer('id_worker')->default(0);
			$table->enum('complete', array('N','Y'))->default('N');
			$table->date('date_complete')->nullable();
			$table->enum('buh_check', array('N','Y'))->default('N');
			$table->text('buh_text')->nullable();
			$table->enum('hidden', array('N','Y'))->default('N');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('repair');
	}

}
