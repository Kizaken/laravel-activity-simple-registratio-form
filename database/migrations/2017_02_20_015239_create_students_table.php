<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration

{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table){

            $table->increments('id');
            $table->string('fname', 50);
            $table->string('mname', 50); 
            $table->string('lname', 50);
            $table->string('course', 50);
            $table->string('guardian', 50); 
            $table->string('domicile', 50); 
            $table->integer('age');
            $table->integer('stud_no');        
            $table->integer('contact_no');
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
         Schema::dropIfExists('students');
    }
}
