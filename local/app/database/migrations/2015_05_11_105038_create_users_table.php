<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    Schema::create('users', function(Blueprint $table)
    {
      $table->increments('id');
      $table->string('name');
      $table->string('title');
      $table->string('email');
      $table->string('website');
      $table->string('phone');
      $table->string('address');
      $table->text('about_me');
      $table->string('image');
      $table->text('summary');

    });
  }

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
    Schema::drop('users');
  }

}
