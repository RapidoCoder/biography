<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHireMeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    Schema::create('hire_me', function(Blueprint $table)
    {
      $table->increments('id');
      $table->string('name');
      $table->string('email');
      $table->text('message');
      $table->string('file');
    });
  }

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
    Schema::drop('hire_me');
  }

}
