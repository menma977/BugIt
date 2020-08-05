<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThemesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('themes', function (Blueprint $table) {
      $table->id();
      $table->string('user_id');
      $table->string('navbar')->default('navbar-dark navbar-primary');
      $table->string('accent_color')->default('accent-primary');
      $table->string('sidebar')->default('sidebar-light-primary');
      $table->string('brand_logo')->default('navbar-primary');
      $table->string('card_default')->default('card-primary');
      $table->string('card_outline')->default('card-primary');
      $table->string('card_bg_color')->default('bg-primary');
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
    Schema::table('themes', function (Blueprint $table) {
      $table->dropSoftDeletes();
    });
    Schema::dropIfExists('themes');
  }
}
