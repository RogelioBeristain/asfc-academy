<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
              $table->id();
               $table->string('name')->nullable();//nombre del tutor
            $table->string('short_description')->nullable();//nombre del tutor
            $table->string('long_description')->nullable();//apellido 
            $table->string('url_thumbl')->nullable();//numero del tutor
            $table->string('url_video')->nullable();//email del tutor
            $table->string('slug')->unique()->nullable();
           
      
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
      Schema::dropIfExists('courses');
    }
}
