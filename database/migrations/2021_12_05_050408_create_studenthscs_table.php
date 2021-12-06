<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudenthscsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studenthscs', function (Blueprint $table) {
            $table->id();
            $table->string('HSC_type');
            $table->string('HSC_group');
            $table->string('HSC_School name');
            $table->string('HSC_board');
            $table->string('HSC_grade');
            $table->string('HSC_gpa');
            $table->string('HSC_4sub');
           
            $table->string('HSC_roll');
            $table->string('HSC_registration number');
            $table->string('HSC_passing year');
            $table->string('HSC_duration');
            
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
        Schema::dropIfExists('studenthscs');
    }
}
