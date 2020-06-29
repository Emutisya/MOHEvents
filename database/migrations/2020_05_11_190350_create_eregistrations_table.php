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
<<<<<<< HEAD
            $table->string('image');
=======
            $table->string('image'); 

            

>>>>>>> 24ad39afb7df2f14029f886c0cfb6179e2ddf016
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
