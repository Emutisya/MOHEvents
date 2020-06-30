<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEregistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eregistrations', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->longText('description');
            $table->string('location');
            $table->time('time');
            $table->date('date');
            $table->timestamps();
            $table->string('organization');
            $table->binary('image');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eregistrations');
    }
}