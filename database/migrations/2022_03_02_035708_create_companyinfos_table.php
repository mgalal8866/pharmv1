<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companyinfos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 250)->nullable();
            $table->string('phone', 250)->nullable();
            $table->string('email', 250)->nullable();
            $table->string('address', 250)->nullable();
            $table->integer('tax', 10)->nullable();
            $table->integer('service', 10)->nullable();
            $table->integer('delivery', 10)->nullable();
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
        Schema::dropIfExists('companyinfos');
    }
}
