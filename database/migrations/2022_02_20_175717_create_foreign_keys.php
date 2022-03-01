<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('warehouse_product', function(Blueprint $table) {
			$table->foreign('warehouse_id')->references('id')->on('warehouses')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('warehouse_product', function(Blueprint $table) {
			$table->foreign('product_id')->references('id')->on('Products')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('Orders', function(Blueprint $table) {
			$table->foreign('brandacount_id')->references('id')->on('brandaccounts')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('Order_details', function(Blueprint $table) {
			$table->foreign('warehouse_product_id')->references('id')->on('warehouse_product')
						->onDelete('no action')
						->onUpdate('no action');
		});
	}

	public function down()
	{
		Schema::table('warehouse_product', function(Blueprint $table) {
			$table->dropForeign('warehouse_product_warehouse_id_foreign');
		});
		Schema::table('warehouse_product', function(Blueprint $table) {
			$table->dropForeign('warehouse_product_product_id_foreign');
		});
		Schema::table('Orders', function(Blueprint $table) {
			$table->dropForeign('Orders_brand_id_foreign');
		});
		Schema::table('Order_details', function(Blueprint $table) {
			$table->dropForeign('Order_details_warehouse_product_id_foreign');
		});
	}
}
