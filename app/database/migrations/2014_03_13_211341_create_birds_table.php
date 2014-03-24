<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBirdsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
		{
		    Schema::create('birds', function($table)
		    {
		        $table->increments('id');
		        $table->string('name');
		        $table->string('latinname');
				$table->string('image');
				$table->string('sound');
				$table->string('description');
		        $table->timestamps();
		    });
		}
		
		public function down()
		{
		    Schema::drop('users');
		}

}
