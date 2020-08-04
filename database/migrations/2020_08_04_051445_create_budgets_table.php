<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBudgetsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('budgets', function (Blueprint $table) {
      $table->uuid('id')->primary();
      $table->string('budget_list_id');
      $table->string('name');
      $table->integer('total');
      $table->integer('price_unit');
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
    Schema::table('budgets', function (Blueprint $table) {
      $table->dropSoftDeletes();
    });
    Schema::dropIfExists('budgets');
  }
}
