<?php

namespace App;

use App\Model\BudgetList;
use App\Model\Profile;
use App\Model\Theme;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Cache;
use Laravel\Passport\HasApiTokens;

/**
 * @property string id
 * @property integer role
 * @property string username
 * @property string email
 * @property string password
 * @property string remember_token
 */
class User extends Authenticatable
{
  use Notifiable, Uuid, SoftDeletes, HasApiTokens;

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
    'username',
    'email',
    'password',
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
    'password',
    'remember_token',
  ];

  /**
   * The attributes that should be cast to native types.
   *
   * @var array
   */
  protected $casts = [
    'email_verified_at' => 'datetime',
  ];

  /**
   * @return HasMany
   */
  public function BudgetList()
  {
    return $this->hasMany(BudgetList::class, 'user_id', ' id');
  }

  /**
   * @return HasOne
   */
  public function Profile()
  {
    return $this->hasOne(Profile::class, 'user_id', 'id');
  }

  /**
   * @return HasOne
   */
  public function Theme()
  {
    return $this->hasOne(Theme::class, 'user_id', 'id');
  }

  /**
   * @return bool
   */
  public function isOnline(): bool
  {
    return Cache::has('activeUser' . $this->id);
  }
}
