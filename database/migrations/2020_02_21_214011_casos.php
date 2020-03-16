<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Casos extends Migration
{
    public function up()
    {
        Schema::create('Casos', function (Blueprint $table) {
            $table->increments('idc');
            $table->string('t-caso',30);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::drop('Casos');
    }
}
