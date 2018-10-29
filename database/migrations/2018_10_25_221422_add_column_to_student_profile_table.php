<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnToStudentProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('student_profiles', function ($table) {
            $table->date('date_of_birth')->after('user_id')->nullable(value(true));
            $table->integer('semester')->after('user_id')->nullable();
            $table->string('address')->after('date_of_birth')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('student_profiles', function ($table) {
            $table->dropColumn('date_of_birth');
            $table->dropColumn('semester');
            $table->dropColumn('address');
        });
    }
}
