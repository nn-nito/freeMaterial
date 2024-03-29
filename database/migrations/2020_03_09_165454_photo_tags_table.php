<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PhotoTagsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('photo_tags', function (Blueprint $table) {
			$table->id();
			$table->unsignedBigInteger('photo_id');
			$table->unsignedBigInteger('tag_id');
			$table->string('name');
			$table->timestamps();

			$table->foreign('photo_id')->references('id')->on('photos');
			$table->foreign('tag_id')->references('id')->on('tags');
		});
	}



	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('photo_tags');
	}
}
