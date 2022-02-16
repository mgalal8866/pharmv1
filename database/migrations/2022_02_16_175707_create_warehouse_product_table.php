<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWarehouseProductTable extends Migration {

	public function up()
	{
		Schema::create('warehouse_product', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('warehouse_id')->unsigned();
			$table->integer('product_id')->unsigned();
			$table->string('qty');
			$table->string('price_sale');
			$table->string('price_buy');
			
			$table->string('unit_id');
			$table->string('category_id');
            $table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('warehouse_product');
	}
}
