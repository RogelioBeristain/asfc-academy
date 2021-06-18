<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
              $table->id();
            $table->mediumInteger('order')->nullable();//nombre del tutor
            
             $table->mediumInteger('hours')->nullable();//nombre del tutor
              $table->mediumInteger('minutes')->nullable();//nombre del tutor
               $table->mediumInteger('seconds')->nullable();//nombre del tutor
              $table->string('status')->nullable();//nombre del tutor
              $table->string('slug')->unique()->nullable();
            $table->string('url_thumbl')->nullable();//numero del tutor
            $table->string('url_video')->nullable();//email del tutor
           $table->unsignedBigInteger('professor_id')->nullable();
            $table->unsignedBigInteger('unit_id')->nullable();
           
      
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classes');
    }
}
