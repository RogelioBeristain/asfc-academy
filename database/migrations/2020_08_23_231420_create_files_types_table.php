<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files_types', function (Blueprint $table) {

            $table->id();
            $table->string('name')->nullable();//nombre del tutor
            $table->string('extention')->nullable();//numero del tutor
            $table->string('url_icon')->nullable();//email del tutor
         
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
        Schema::dropIfExists('files_types');
    }
}
