<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('users', function (Blueprint $table) {
            $table->integer('id');
            $table->string('user_name');
            $table->string('email');
            $table->string('password');
            $table->timestamps();
        });

        Schema::create('students', function (Blueprint $table) {
            $table->integer('id')->default('Auto_increment');
            $table->integer('grade')->default(1);
            $table->string('name');
            $table->string('addres');
            $table->string('img_path');
            $table->string('comment')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
