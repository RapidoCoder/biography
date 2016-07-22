<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfolioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    Schema::create('portfolios', function(Blueprint $table)
    {
      $table->increments('id');
      $table->integer('portfolio_category_id')->unsigned();
      $table->foreign('portfolio_category_id')->references('id')->on('portfolio_categories')->onDelete('cascade')->onUpdate('cascade');
      $table->string('title');
      $table->string('image');
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
    Schema::drop('portfolios');
  }

}
