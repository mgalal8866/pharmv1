<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	public function up()
	{
		Schema::create('Products', function(Blueprint $table) {
			$table->increments('id', true)->primary();
			$table->string('name', 250);
			$table->string('effective', 250);
			$table->longText('description');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('Products');
	}
}
