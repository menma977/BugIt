<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Theme
 * @package App\Model
 * @property integer id
 * @property string user_id
 * @property string navbar
 * @property string accent_color
 * @property string sidebar
 * @property string brand_logo
 */
class Theme extends Model
{
  use SoftDeletes;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'id',
    'user_id',
    'navbar',
    'accent_color',
    'sidebar',
    'brand_logo',
  ];

  /**
   * @return HasOne
   */
  public function User()
  {
    return $this->hasOne(User::class, 'id', 'user_id');
  }
}
