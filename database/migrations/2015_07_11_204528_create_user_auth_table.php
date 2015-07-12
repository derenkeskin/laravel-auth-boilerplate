<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAuthTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up(){
    Schema::create('user_auth', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('user_id');
			$table->string('provider');
      $table->string('uid')->unique();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down(){
    Schema::drop('user_auth');
  }
}
