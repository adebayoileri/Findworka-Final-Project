<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPaymentStatusIdToUserCourses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // public function up()
    // {
    //     Schema::table('user_courses', function (Blueprint $table) {
    //         $table->integer('payment_status_id')->unsigned()->default(3);
    //         $table->foreign('payment_status_id')->references('id')->on('payment_statuses')->onDelete('cascade');
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
