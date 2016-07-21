<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationAchievmentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    Schema::create('education_achievments', function(Blueprint $table)
    {
      $table->increments('id');
      $table->integer('education_id')->unsigned();
      $table->foreign('education_id')->references('id')->on('educations')->onDelete('cascade')->onUpdate('cascade');
      $table->string('description');

    });
  }

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
    Schema::drop('education_achievments');
  }

}
