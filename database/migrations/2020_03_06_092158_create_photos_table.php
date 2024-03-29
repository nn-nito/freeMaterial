<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
			$table->string('url');
			$table->string('filename');
			$table->unsignedInteger('download_count')->default(0);
			$table->unsignedInteger('download_count_weekly')->default(0);
			$table->unsignedInteger('download_count_monthly')->default(0);
            $table->string('description')->nullable();
            $table->string('resolution');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('photos');
    }
}
