<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('category',function($table){
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('description')->nullable();
            $table->integer('article_count')->unsigned()->default(0);

        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('category');
	}

}
