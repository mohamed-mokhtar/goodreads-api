<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement();
            $table->string('title');
            $table->integer('isbn')->unique();
            $table->string('img_url');
            $table->date('publication_date');
            $table->string('publisher');
            $table->string('language');
            $table->string('description');
            $table->integer('reviews_count')->nullable();
            $table->integer('ratings_count')->nullable();
            $table->float('ratings_avg')->nullable();
            $table->string('link');
            $table->integer('author_id');
            $table->integer('pages_no')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
