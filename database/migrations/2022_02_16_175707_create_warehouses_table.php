<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWarehousesTable extends Migration {

	public function up()
	{
		Schema::create('warehouses', function(Blueprint $table) {
			$table->increments('id', true)->primary();
			$table->string('name', 250);
			$table->integer('phone');
			$table->string('address', 250);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('warehouses');
	}
}
