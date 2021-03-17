<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTaxonomyTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('post_taxonomy', function (Blueprint $table) {
      $table->id();
      $table->timestamps();

      $table->unsignedBigInteger('taxonomy_id');
      $table->foreign('taxonomy_id')
        ->references('id')
        ->on('taxonomies')
        ->onDelete('restrict')
        ->onUpdate('restrict');

      $table->unsignedBigInteger('post_id');
      $table->foreign('post_id')
        ->references('id')
        ->on('posts')
        ->onDelete('restrict')
        ->onUpdate('restrict');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('post_taxonomy');
  }
}
