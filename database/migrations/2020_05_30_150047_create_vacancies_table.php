<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancies', function (Blueprint $table) {

                $table->id();
                $table->unsignedBigInteger('user_id');
                $table->string('title');

                $table->text('description');

                $table->timestamps();
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            });
    }


    /**
     * Reverse the migrations.
     *
     * 
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacancies');
    }
}