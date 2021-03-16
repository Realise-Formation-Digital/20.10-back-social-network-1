<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('users', function (Blueprint $table) {
      $table->id();
      $table->timestamps();
      $table->string('email', 100);
      $table->string('name', 100);
      $table->string('firstname', 100);
      $table->string('password', 100);
      $table->string('avatar', 255)->nullable();
      $table->string('address', 255)->nullable();
      $table->integer('phone')->nullable();
      $table->integer('birth_date')->nullable();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('users');
  }
}
