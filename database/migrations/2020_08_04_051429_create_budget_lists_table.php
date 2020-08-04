<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBudgetListsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('budget_lists', function (Blueprint $table) {
      $table->uuid('id')->primary();
      $table->string('user_id');
      $table->string('name');
      $table->integer('limit');
      $table->integer('status');
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
    Schema::table('budget_lists', function (Blueprint $table) {
      $table->dropSoftDeletes();
    });
    Schema::dropIfExists('budget_lists');
  }
}
