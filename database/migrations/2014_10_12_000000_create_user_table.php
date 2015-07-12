<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up(){
    Schema::create('user', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->string('username')->nullable();
      $table->string('email')->unique();
      $table->string('password', 60);
      $table->rememberToken();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down(){
    Schema::drop('user');
  }
}
