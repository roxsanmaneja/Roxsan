<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableStudents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Students', function (Blueprint $table) {
            $table->id();
            $table->string('Firstname', 100)->nullable;
            $table->string('Middlename', 100)->nullable;
            $table->string('Lastname', 100)->nullable;
            $table->date('Birthdate')->nullable;
            $table->string('Gender', 12)->nullable;
            $table->string('Address', 500)->nullable;
            $table->string('Citizenship', 100)->nullable;
            $table->string('Religion', 100)->nullable;
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
        Schema::dropIfExists('Students');
    }
}
