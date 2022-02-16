<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategorysTable extends Migration {

	public function up()
	{
		Schema::create('Categorys', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 250);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('Categorys');
	}
}
