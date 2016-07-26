<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResearchProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    Schema::create('research_projects', function(Blueprint $table)
    {
      $table->increments('id');
      $table->integer('research_category_id')->unsigned();
      $table->foreign('research_category_id')->references('id')->on('research_categories')->onDelete('cascade')->onUpdate('cascade');
      $table->string('title');
      $table->string('url');
      $table->dateTime('date');
      $table->text('description');

    });
  }

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
    Schema::drop('research_projects');
  }

}
