<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailsTable extends Migration {

	public function up()
	{ 
		Schema::create('Order_details', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('warehouse_product_id')->unsigned();
            $table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('Order_details');
	}
}
