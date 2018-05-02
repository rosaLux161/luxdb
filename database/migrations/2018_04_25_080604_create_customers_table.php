<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
			$table->timestamps();
			$table->string('lastname')->nullable();
			$table->string('firstname')->nullable();
			$table->string('company')->nullable();
			$table->string('phonenumber')->nullable();
			$table->string('email')->nullable();
            $table->string('officialid')->nullable();
            $table->integer('commercial')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
