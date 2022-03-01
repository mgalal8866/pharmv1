<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration {

	public function up()
	{
		Schema::create('Orders', function(Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('brandacount_id');
            $table->string('numberorder', 250);
			$table->decimal('total', 8,2);
			$table->string('date', 250);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('Orders');
	}
}
