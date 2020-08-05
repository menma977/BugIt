<?php

namespace App\Http\Controllers;

use App\Model\Theme;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ThemeController extends Controller
{
  /**
   * Show the form for editing the specified resource.
   *
   * @return Application|Factory|View|void
   */
  public function edit()
  {
    $theme = Theme::where('user_id', Auth::id())->first();

    $data = [
      'theme' => $theme
    ];
//    dump($data);
    return view('theme.edit', $data);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param Request $request
   * @return void
   */
  public function update(Request $request)
  {
    $theme = Theme::find(Auth::user()->id);
  }
}
