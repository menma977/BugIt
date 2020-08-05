<?php

use App\Model\Profile;
use App\Model\Theme;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $this->user1();
  }

  private function user1() {
    $user = new User();
    $user->username = "menma977";
    $user->email = "com.owl.minerva@gmail.com";
    $user->password = Hash::make('menma977');
    $user->role = 1;
    $user->save();

    $profile = new Profile();
    $profile->user_id = $user->id;
    $profile->name = "wisnu putra dewa";
    $profile->address = "jl.terate no 75 madiun";
    $profile->save();

    $theme = new Theme();
    $theme->user_id = $user->id;
    $theme->save();
  }
}
