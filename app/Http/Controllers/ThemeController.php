<?php

namespace App\Http\Controllers;

use App\Model\Theme;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
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
    return view('theme.edit', $data);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param Request $request
   * @return RedirectResponse
   * @throws ValidationException
   */
  public function update(Request $request)
  {
    $this->validate($request, [
      'navbarInput' => 'required|string',
      'brandLogoInput' => 'required|string',
      'accentInput' => 'required|string',
      'sidebarInput' => 'required|string',
      'cardDefaultInput' => 'required|string',
      'cardOutlineInput' => 'required|string',
      'cardColorBlockInput' => 'required|string',
    ]);

    $theme = Theme::where('user_id', Auth::user()->id)->first();
    $theme->navbar = $request->navbarInput;
    $theme->accent_color = $request->accentInput;
    $theme->sidebar = $request->sidebarInput;
    $theme->brand_logo = $request->brandLogoInput;
    $theme->card_default = $request->cardDefaultInput;
    $theme->card_outline = $request->cardOutlineInput;
    $theme->card_bg_color = $request->cardColorBlockInput;
    $theme->save();

    return redirect()->back();
  }
}
