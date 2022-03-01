<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailsTable extends Migration {

	public function up()
	{
		Schema::create('Order_details', function(Blueprint $table) {
			$table->bigIncrements('id');
            $table->unsignedBigInteger('order_id');
			$table->integer('warehouse_product_id')->unsigned();
            $table->decimal('price',8,2);
            $table->string('qty');
            $table->decimal('total',8,2)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('Order_details');
	}
}
