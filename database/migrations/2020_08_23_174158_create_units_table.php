<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units', function (Blueprint $table) {
             $table->id();
            $table->string('title')->nullable();//nombre del tutor
           
            $table->string('url_thumbl')->nullable();//numero del tutor
            $table->string('url_video')->nullable();//email del tutor
           $table->unsignedBigInteger('branch_id')->nullable();
           
      
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
        Schema::dropIfExists('units');
    }
}
