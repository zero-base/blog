<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('article',function($table){
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->string('title');
            $table->text('body');
            $table->integer('view_count')->unsigned()->default(0);
            $table->integer('comment_count')->unsigned()->default(0);
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('category')
                ->onDelete('cascade');

        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('article');
	}

}
