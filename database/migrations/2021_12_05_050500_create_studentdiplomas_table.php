<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentdiplomasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentdiplomas', function (Blueprint $table) {
            $table->id();
            $table->string('Diploma_type');
            $table->string('Diploma_group');
            $table->string('Diploma_School name');
            
            $table->string('Diploma_scale');
            $table->string('Diploma_cgpa');
            
            $table->string('Diploma_grade');
            
            $table->string('Diploma_passing year');
            $table->string('Diploma_duration');
            
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
        Schema::dropIfExists('studentdiplomas');
    }
}
