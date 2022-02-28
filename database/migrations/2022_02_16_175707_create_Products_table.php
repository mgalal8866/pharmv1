<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	public function up()
	{
		Schema::create('Products', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 250);
            $table->text('slug', 250);
			$table->string('origin', 250)->nullable();
            $table->string('company', 250)->nullable();
            $table->string('effective', 250)->nullable();
			$table->longText('description')->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('Products');
	}
}
