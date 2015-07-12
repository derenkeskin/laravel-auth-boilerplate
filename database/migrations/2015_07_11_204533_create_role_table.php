<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up(){
    Schema::create('role', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name', 60)->unique();
      $table->string('description')->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down(){
    Schema::drop('role');
  }
}
