<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandacountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brandaccounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('namebrand')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('email',32)->unique();
            $table->string('license')->nullable();
            $table->string('password',255);
            $table->text('remember_token')->nullable();
            $table->boolean('is_active')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brandaccounts');
    }
}
