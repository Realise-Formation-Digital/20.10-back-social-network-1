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
      $table->string('email')->unique();
      $table->timestamp('email_verified_at')->nullable();
      $table->string('name', 50);
      $table->string('firstname', 50);
      $table->string('password');
      $table->rememberToken();
      $table->string('avatar', 255)->nullable();
      $table->string('address', 255)->nullable();
      $table->string('phone', 50)->nullable();
      $table->string('birth_date', 50)->nullable();
    });/* 

    Schema::table('users', function ($table) {
      $table->string('api_token', 80)->after('password')
        ->unique()
        ->nullable()
        ->default(null);
    }); */
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
