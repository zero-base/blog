<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comment',function($table){
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('ower')->default('匿名');
            $table->integer('article_id')->unsigned();
            $table->integer('parent_id')->unsigned()->default(0);
            $table->text('body');
            $table->timestamp('create_at');

            $table->foreign('article_id')->references('id')->on('article')
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
        Schema::drop('comment');
    }

}
