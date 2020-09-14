<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Enterprise extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Enterprise', function (Blueprint $table) {
            $table->id();
            $table->string('nameofUnit');
            $table->string('dateOfDop');
            $table->string('nameOfPromoteer');
            $table->string('cantactNo');
            $table->string('email');
            $table->string('address');
            $table->string('district');
            $table->string('block');
            $table->string('landType');
            $table->string('sector');
            $table->string('products');
            $table->string('typeOfUnit');
            $table->string('investment');
            $table->string('turnOverInFy');
            $table->string('directEmployeement');
            $table->string('indirectEmployment');
            $table->string('noofMaleEmployeeDirect');
            $table->string('noofFemaleEmployeeDirect');
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
        Schema::drop('Enterprise');
    }
}
