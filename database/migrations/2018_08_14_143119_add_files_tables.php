<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFilesTables extends Migration
{
  public function up(){

      Schema::create('files', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('path');
          $table->timestamps();
      });

  }


  public function down(){

      Schema::drop('files');

  }
}
