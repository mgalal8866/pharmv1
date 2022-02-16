<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnitsTable extends Migration {

	public function up()
	{
		Schema::create('Units', function(Blueprint $table) {
			$table->increments('id', true);
			$table->string('name', 250);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('Units');
	}
}
