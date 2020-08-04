<?php

namespace App\Model;

use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Budget
 * @package App\Model
 * @property string id
 * @property string budget_list_id
 * @property string name
 * @property integer total
 * @property integer price_unit
 */
class Budget extends Model
{
  use Uuid;
  use SoftDeletes;

  protected $keyType = 'string';
  public $incrementing = false;
  protected $guarded = [];
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'id',
    'budget_list_id',
    'name',
    'total',
    'price_unit',
  ];

  /**
   * @return HasOne
   */
  public function BudgetList()
  {
    return $this->hasOne(BudgetList::class, 'id', 'budget_list_id');
  }
}
