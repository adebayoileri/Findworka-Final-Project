<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmissionUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('submission_user', function (Blueprint $table) {

        //  $table->increments('id');
        //  $table->integer('user_id');
        //  $table->integer('submission_id');
        //  $table->integer('course_id')->unsigned();
        //  $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade')->onUpdate('cascade');
        //  $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        //  $table->foreign('submission_id')->references('id')->on('submissions')->onDelete('cascade');
        //  $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('submission_users');
    }
}
