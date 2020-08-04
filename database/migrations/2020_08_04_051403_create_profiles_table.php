<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('profiles', function (Blueprint $table) {
      $table->uuid('id')->primary();
      $table->string('user_id');
      $table->string('name');
      $table->text('address')->nullable();
      $table->text('image')->nullable();
      $table->timestamps();
      $table->softDeletes();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('profiles', function (Blueprint $table) {
      $table->dropSoftDeletes();
    });
    Schema::dropIfExists('profiles');
  }
}
