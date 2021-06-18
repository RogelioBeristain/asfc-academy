<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutors', function (Blueprint $table) {
             $table->id();
            $table->string('first_name')->nullable();//nombre del tutor
            $table->string('last_name')->nullable();//apellido 
            $table->string('phone')->nullable();//numero del tutor
            $table->string('address')->nullable();//email del tutor
            $table->string('relationship')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
           
      
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
       Schema::dropIfExists('tutors');
    }
}
