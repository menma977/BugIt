<?php

namespace App\Model;

use App\User;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class BudgetList
 * @package App\Model
 * @property string id
 * @property string user_id
 * @property string name
 * @property integer limit
 * @property integer status
 */
class BudgetList extends Model
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
    'user_id',
    'name',
    'limit',
    'status',
  ];

  /**
   * @return HasOne
   */
  public function User()
  {
    return $this->hasOne(User::class, 'id', 'user_id');
  }

  public function Budget()
  {
    return $this->hasMany(Budget::class, 'budget_list_id', 'id');
  }
}
