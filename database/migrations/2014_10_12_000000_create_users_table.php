<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement();                // The id
            $table->string('name');                                        // The name
            $table->string('username')->unique();                          // The username (unique)
            $table->string('email')->unique();                             // The Email
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');                                    // Password
            $table->string('link')->nullable();                                        // The link of the user
            $table->string('image_link')->nullable();                                   // The link of the image
            $table->string('small_image_link')->nullable();
            $table->string('about')->nullable();                                       // bio about the user
            $table->integer('age')->nullable();                                        // The age of the user
            $table->char('gender');                                        // The gender of the user
            $table->string('country');                                     // The country of the user
            $table->string('city');                                        // The city of the user
            $table->date('joined_at')->nullable();                                      // The date of his joining in the website
            $table->datetime('last_active')->nullable();                                // Last active
            $table->integer('followers_count')->nullable();                             // followers count
            $table->integer('following_count')->nullable();                            // following count
            $table->float('rating_avg');                                    // Raging average
            $table->integer('rating_count');
            $table->integer('books_count')->nullable();                                // Book count
            $table->date("birthday")->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
