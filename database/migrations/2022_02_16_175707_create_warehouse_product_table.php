<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWarehouseProductTable extends Migration {

	public function up()
	{
		Schema::create('warehouse_product', function(Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('warehouse_id')->unsigned();
			$table->unsignedInteger('product_id');
            $table->string('code');
			$table->string('qty');
			$table->string('price_sale');
			$table->string('price_buy');
            $table->string('special_price')->nullable();
            $table->enum('special_type', array('fixed', 'percentage'))->nullable();
            $table->string('special_startdate')->nullable();
            $table->string('special_enddate')->nullable();
			$table->text('image')->nullable();
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
