<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentbscsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentbscs', function (Blueprint $table) {
            $table->id();
            $table->string('BSc_type');
            $table->string('BSc_group');
            $table->string('BSc_School name');
            
            $table->string('BSc_scale');
            $table->string('BSc_cgpa');
            
            $table->string('BSc_grade');
            
            $table->string('BSc_passing year');
            $table->string('BSc_duration');
            
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
        Schema::dropIfExists('studentbscs');
    }
}
