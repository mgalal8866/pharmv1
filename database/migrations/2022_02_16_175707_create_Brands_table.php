<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateBrandsTable extends Migration {

	public function up()
	{
		Schema::create('Brands', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 250);
			$table->string('address', 250);
			$table->string('phone', 250);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('Brands');
	}
}
