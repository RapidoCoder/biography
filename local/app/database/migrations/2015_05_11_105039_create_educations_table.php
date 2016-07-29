<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    Schema::create('educations', function(Blueprint $table)
    {
      $table->increments('id');
      $table->dateTime('start_year');
      $table->dateTime('end_year');
      $table->string('title');
      $table->string('university');
      $table->string('achievements_title');

    });
  }

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
    Schema::drop('educations');
  }

}
