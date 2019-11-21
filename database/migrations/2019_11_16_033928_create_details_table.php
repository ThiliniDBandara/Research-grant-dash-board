<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name');
            $table->string('designation');
            $table->string('department');
            $table->string('faculty');
            $table->string('tel');
            $table->string('email');
            $table->string('event');
            $table->string('country');
            $table->string('period');
            $table->string('title');
            
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
        Schema::dropIfExists('details');
    }
}
