<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsscsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentsscs', function (Blueprint $table) {
            $table->id();
            $table->string('Ssc_type');
            $table->string('Ssc_group');
            $table->string('School_name');
            $table->string('Ssc_board');
            $table->string('Ssc_grade');
            $table->string('Ssc_gpa');
            $table->string('Ssc_4sub');
           
            $table->string('Ssc_roll');
            $table->string('Ssc_registration_number');
            $table->string('Ssc_passing_year');
            $table->string('Ssc_duration');
            
            $table->string('email')->unique();
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
        Schema::dropIfExists('studentsscs');
    }
}
