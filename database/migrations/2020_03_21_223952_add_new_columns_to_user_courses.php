<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewColumnsToUserCourses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // public function up()
    // {
    //     Schema::table('user_courses', function (Blueprint $table) {
    //         $table->integer('progress')->unsigned()->default(0);
    //         $table->integer('payment_id')->unsigned()->nullable();
    //         $table->foreign('payment_id')->references('id')->on('payments')->onDelete('cascade')->onUpdate('cascade');
    //         $table->foreign('payment_status_id')->references('id')->on('payment_statuses')->onDelete('cascade')->onUpdate('cascade');
    //     });
    // }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_courses', function (Blueprint $table) {
            //
        });
    }
}
