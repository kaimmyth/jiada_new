<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Enterprise_test extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Enterprise_test', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nameofUnit');
            $table->string('dateOfDop')->nullable();
            $table->string('nameOfPromoteer');
            $table->string('cantactNo');
            $table->string('email')->unique();
            $table->string('address');
            $table->string('district');
            $table->string('block');
            $table->string('landType');
            $table->string('sector')->nullable();
            $table->string('products');
            $table->string('typeOfUnit');
            $table->string('investment')->nullable();
            $table->string('turnOverInFy1')->nullable();
            $table->string('turnOverInFy2')->nullable();
            $table->string('directEmployeement')->nullable();
            $table->string('indirectEmployment')->nullable();
            $table->string('noofMaleEmployeeDirect')->nullable();
            $table->string('noofFemaleEmployeeDirect')->nullable();
            $table->string('valueofExport')->nullable();
            $table->string('statusofUnit');
            $table->smallInteger('status')->default('0');
            $table->dateTime('created_at')->default('CURRENT_TIMESTAMP');
            $table->bigInteger('created_by');
            $table->bigInteger('updated_by');
            $table->dateTime('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
