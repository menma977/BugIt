@extends('layouts.app')

@section('title')
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1>Theme Setting</h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('home.home') }}">Home</a></li>
        <li class="breadcrumb-item active">Theme</li>
      </ol>
    </div>
  </div>
@endsection

@section('content')
  <form action="{{ route('theme.update') }}" method="post" class="row">
    @csrf
    <div class="col-md-12 mb-2">
      <button type="submit" class="btn btn-outline-success float-right">save</button>
    </div>
    <div class="col-md-6">
      <div class="card {{ Auth::user()->theme->card_default }}">
        <div class="card-header">
          <h3 class="card-title">Navbar Variants</h3>
        </div>
        <div class="card-body">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-tint"></i></span>
            </div>
            <input id="navbarInput" name="navbarInput" type="text" class="form-control @error('navbarInput') is-invalid @enderror" placeholder="Navbar Color" value="{{ old('navbarInput') ?: $theme->navbar }}" readonly>
          </div>
          <div class="row">
            <div class="col-md-3 mb-2">
              <button type="button" onclick="navbars('navbar-dark navbar-primary');"
                      class="btn bg-primary elevation-2 btn-sm btn-block {{ str_contains($theme->navbar, 'primary') ? 'active' : '' }}">
                bg-primary
              </button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="navbars('navbar-dark navbar-secondary');"
                      class="btn bg-secondary elevation-2 btn-sm btn-block {{ str_contains($theme->navbar, 'secondary') ? 'active' : '' }}">
                bg-secondary
              </button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="navbars('navbar-dark navbar-info');"
                      class="btn bg-info elevation-2 btn-sm btn-block {{ str_contains($theme->navbar, 'info') ? 'active' : '' }}">
                bg-info
              </button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="navbars('navbar-dark navbar-success');"
                      class="btn bg-success elevation-2 btn-sm btn-block {{ str_contains($theme->navbar, 'success') ? 'active' : '' }}">
                bg-success
              </button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="navbars('navbar-dark navbar-danger');" class="btn bg-danger elevation-2 btn-sm btn-block {{ str_contains($theme->navbar, 'danger') ? 'active' : '' }}">
                bg-danger
              </button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="navbars('navbar-dark navbar-indigo');"
                      class="btn bg-indigo elevation-2 btn-sm btn-block {{ str_contains($theme->navbar, 'indigo') ? 'active' : '' }}">
                bg-indigo
              </button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="navbars('navbar-dark navbar-purple');"
                      class="btn bg-purple elevation-2 btn-sm btn-block {{ str_contains($theme->navbar, 'purple') ? 'active' : '' }}">
                bg-purple
              </button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="navbars('navbar-dark navbar-pink');"
                      class="btn bg-pink elevation-2 btn-sm btn-block {{ str_contains($theme->navbar, 'pink') ? 'active' : '' }}">
                bg-pink
              </button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="navbars('navbar-dark navbar-navy');"
                      class="btn bg-navy elevation-2 btn-sm btn-block {{ str_contains($theme->navbar, 'navy') ? 'active' : '' }}">
                bg-navy
              </button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="navbars('navbar-dark navbar-lightblue');"
                      class="btn bg-lightblue elevation-2 btn-sm btn-block {{ str_contains($theme->navbar, 'lightblue') ? 'active' : '' }}">
                bg-lightblue
              </button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="navbars('navbar-dark navbar-teal');"
                      class="btn bg-teal elevation-2 btn-sm btn-block {{ str_contains($theme->navbar, 'teal') ? 'active' : '' }}">
                bg-teal
              </button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="navbars('navbar-dark navbar-cyan');"
                      class="btn bg-cyan elevation-2 btn-sm btn-block {{ str_contains($theme->navbar, 'cyan') ? 'active' : '' }}">
                bg-cyan
              </button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="navbars('navbar-dark');"
                      class="btn bg-dark elevation-2 btn-sm btn-block {{ str_contains($theme->navbar, 'dark') ? 'active' : '' }}">
                bg-dark
              </button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="navbars('navbar-dark navbar-gray-dark');"
                      class="btn bg-gray-dark elevation-2 btn-sm btn-block {{ str_contains($theme->navbar, 'gray-dark') ? 'active' : '' }}">
                bg-gray-dark
              </button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="navbars('navbar-dark navbar-gray');"
                      class="btn bg-gray elevation-2 btn-sm btn-block {{ str_contains($theme->navbar, 'gray') ? 'active' : '' }}">
                bg-gray
              </button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="navbars('navbar-light');"
                      class="btn bg-light elevation-2 btn-sm btn-block {{ str_contains($theme->navbar, 'primary') ? 'active' : '' }}">
                bg-light
              </button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="navbars('navbar-light navbar-warning');"
                      class="btn bg-warning elevation-2 btn-sm btn-block {{ str_contains($theme->navbar, 'warning') ? 'active' : '' }}">
                bg-warning
              </button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="navbars('navbar-light navbar-white');"
                      class="btn bg-white elevation-2 btn-sm btn-block {{ str_contains($theme->navbar, 'white') ? 'active' : '' }}">
                bg-white
              </button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="navbars('navbar-light navbar-orange');"
                      class="btn bg-orange elevation-2 btn-sm btn-block {{ str_contains($theme->navbar, 'orange') ? 'active' : ''}}">
                bg-orange
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card {{ Auth::user()->theme->card_default }}">
        <div class="card-header">
          <h3 class="card-title">Brand Logo Variants</h3>
        </div>
        <div class="card-body">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-tint"></i></span>
            </div>
            <input id="brandLogoInput" name="brandLogoInput" type="text" class="form-control @error('brandLogoInput') is-invalid @enderror"
                   placeholder="Brand Logo Color"
                   value="{{ old('navbarInput') ?: $theme->brand_logo }}"
                   readonly>
          </div>
          <div class="row">
            <div class="col-md-3 mb-2">
              <button type="button" onclick="brandLogos('navbar-primary')" class="btn bg-primary elevation-2 btn-sm btn-block {{ str_contains($theme->brand_logo, 'primary') ? 'active' : '' }}">bg-primary</button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="brandLogos('navbar-secondary')" class="btn bg-secondary elevation-2 btn-sm btn-block {{ str_contains($theme->brand_logo, 'secondary') ? 'active' : '' }}">bg-secondary</button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="brandLogos('navbar-info')" class="btn bg-info elevation-2 btn-sm btn-block {{ str_contains($theme->brand_logo, 'info') ? 'active' : '' }}">bg-info</button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="brandLogos('navbar-success')" class="btn bg-success elevation-2 btn-sm btn-block {{ str_contains($theme->brand_logo, 'success') ? 'active' : '' }}">bg-success</button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="brandLogos('navbar-danger')" class="btn bg-danger elevation-2 btn-sm btn-block {{ str_contains($theme->brand_logo, 'danger') ? 'active' : '' }}">bg-danger</button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="brandLogos('navbar-indigo')" class="btn bg-indigo elevation-2 btn-sm btn-block {{ str_contains($theme->brand_logo, 'indigo') ? 'active' : '' }}">bg-indigo</button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="brandLogos('navbar-purple')" class="btn bg-purple elevation-2 btn-sm btn-block {{ str_contains($theme->brand_logo, 'purple') ? 'active' : '' }}">bg-purple</button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="brandLogos('navbar-pink')" class="btn bg-pink elevation-2 btn-sm btn-block {{ str_contains($theme->brand_logo, 'pink') ? 'active' : '' }}">bg-pink</button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="brandLogos('navbar-navy')" class="btn bg-navy elevation-2 btn-sm btn-block {{ str_contains($theme->brand_logo, 'navy') ? 'active' : '' }}">bg-navy</button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="brandLogos('navbar-lightblue')" class="btn bg-lightblue elevation-2 btn-sm btn-block {{ str_contains($theme->brand_logo, 'lightblue') ? 'active' : '' }}">bg-lightblue</button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="brandLogos('navbar-teal')" class="btn bg-teal elevation-2 btn-sm btn-block {{ str_contains($theme->brand_logo, 'teal') ? 'active' : '' }}">bg-teal</button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="brandLogos('navbar-cyan')" class="btn bg-cyan elevation-2 btn-sm btn-block {{ str_contains($theme->brand_logo, 'cyan') ? 'active' : '' }}">bg-cyan</button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="brandLogos('navbar-dark')" class="btn bg-dark elevation-2 btn-sm btn-block {{ str_contains($theme->brand_logo, 'dark') ? 'active' : '' }}">bg-dark</button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="brandLogos('navbar-gray-dark')" class="btn bg-gray-dark elevation-2 btn-sm btn-block {{ str_contains($theme->brand_logo, 'gray-dark') ? 'active' : '' }}">bg-gray-dark</button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="brandLogos('navbar-gray')" class="btn bg-gray elevation-2 btn-sm btn-block {{ str_contains($theme->brand_logo, 'gray') ? 'active' : '' }}">bg-gray</button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="brandLogos('navbar-light')" class="btn bg-light elevation-2 btn-sm btn-block {{ str_contains($theme->brand_logo, 'light') ? 'active' : '' }}">bg-light</button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="brandLogos('navbar-warning')" class="btn bg-warning elevation-2 btn-sm btn-block {{ str_contains($theme->brand_logo, 'warning') ? 'active' : '' }}">bg-warning</button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="brandLogos('navbar-white')" class="btn bg-white elevation-2 btn-sm btn-block {{ str_contains($theme->brand_logo, 'white') ? 'active' : '' }}">bg-white</button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="brandLogos('navbar-orange')" class="btn bg-orange elevation-2 btn-sm btn-block {{ str_contains($theme->brand_logo, 'orange') ? 'active' : '' }}">bg-orange</button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="brandLogos('')" class="btn bg-transparent btn-sm btn-block {{ str_contains($theme->brand_logo, 'transparent') ? 'active' : '' }}">clear</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card card-outline {{ Auth::user()->theme->card_outline }}">
        <div class="card-header">
          <h3 class="card-title">Accent Color Variants</h3>
        </div>
        <div class="card-body">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-tint"></i></span>
            </div>
            <input id="accentInput" name="accentInput" type="text" class="form-control @error('accentInput') is-invalid @enderror"
                   placeholder="Accent Color"
                   value="{{ old('navbarInput') ?: $theme->accent_color }}"
                   readonly>
          </div>
          <div class="row">
            <div class="col-md-3 mb-2">
              <button type="button" onclick="accents('accent-primary')" class="btn bg-primary elevation-2 btn-sm btn-block {{ str_contains($theme->accent_color, 'primary') ? 'active' : '' }}">bg-primary</button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="accents('accent-warning')" class="btn bg-warning elevation-2 btn-sm btn-block {{ str_contains($theme->accent_color, 'warning') ? 'active' : '' }}">bg-warning</button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="accents('accent-info')" class="btn bg-info elevation-2 btn-sm btn-block {{ str_contains($theme->accent_color, 'info') ? 'active' : '' }}">bg-info</button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="accents('accent-danger')" class="btn bg-danger elevation-2 btn-sm btn-block {{ str_contains($theme->accent_color, 'danger') ? 'active' : '' }}">bg-danger</button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="accents('accent-success')" class="btn bg-success elevation-2 btn-sm btn-block {{ str_contains($theme->accent_color, 'success') ? 'active' : '' }}">bg-success</button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="accents('accent-indigo')" class="btn bg-indigo elevation-2 btn-sm btn-block {{ str_contains($theme->accent_color, 'indigo') ? 'active' : '' }}">bg-indigo</button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="accents('accent-lightblue')" class="btn bg-lightblue elevation-2 btn-sm btn-block {{ str_contains($theme->accent_color, 'lightblue') ? 'active' : '' }}">bg-lightblue</button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="accents('accent-navy')" class="btn bg-navy elevation-2 btn-sm btn-block {{ str_contains($theme->accent_color, 'navy') ? 'active' : '' }}">bg-navy</button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="accents('accent-purple')" class="btn bg-purple elevation-2 btn-sm btn-block {{ str_contains($theme->accent_color, 'purple') ? 'active' : '' }}">bg-purple</button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="accents('accent-fuchsia')" class="btn bg-fuchsia elevation-2 btn-sm btn-block {{ str_contains($theme->accent_color, 'fuchsia') ? 'active' : '' }}">bg-fuchsia</button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="accents('accent-pink')" class="btn bg-pink elevation-2 btn-sm btn-block {{ str_contains($theme->accent_color, 'pink') ? 'active' : '' }}">bg-pink</button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="accents('accent-maroon')" class="btn bg-maroon elevation-2 btn-sm btn-block {{ str_contains($theme->accent_color, 'maroon') ? 'active' : '' }}">bg-maroon</button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="accents('accent-orange')" class="btn bg-orange elevation-2 btn-sm btn-block {{ str_contains($theme->accent_color, 'orange') ? 'active' : '' }}">bg-orange</button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="accents('accent-lime')" class="btn bg-lime elevation-2 btn-sm btn-block {{ str_contains($theme->accent_color, 'lime') ? 'active' : '' }}">bg-lime</button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="accents('accent-teal')" class="btn bg-teal elevation-2 btn-sm btn-block {{ str_contains($theme->accent_color, 'teal') ? 'active' : '' }}">bg-teal</button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="accents('accent-olive')" class="btn bg-olive elevation-2 btn-sm btn-block {{ str_contains($theme->accent_color, 'olive') ? 'active' : '' }}">bg-olive</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card card-outline {{ Auth::user()->theme->card_bg_color }}">
        <div class="card-header">
          <h3 class="card-title">Dark/Light Sidebar Variants</h3>
        </div>
        <div class="card-body">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-tint"></i></span>
            </div>
            <input id="sidebarInput" name="sidebarInput" type="text" class="form-control @error('sidebarInput') is-invalid @enderror"
                   placeholder="Sidebar Color"
                   value="{{ old('sidebarInput') ?: $theme->sidebar }}"
                   readonly>
          </div>
          <div class="btn-group btn-group-toggle mb-3 btn-block elevation-1" data-toggle="buttons">
            <label class="btn btn-outline-dark">
              <input type="radio" name="options" id="option-dark" autocomplete="off" {{ str_contains($theme->sidebar, 'sidebar-dark') ? 'checked' : '' }}> Dark
            </label>
            <label class="btn btn-outline-dark">
              <input type="radio" name="options" id="option-light" autocomplete="off" {{ str_contains($theme->sidebar, 'sidebar-light') ? 'checked' : '' }}> Light
            </label>
          </div>
          <div class="row">
            <div class="col-md-3 mb-2">
              <button type="button" onclick="sidebars('primary')" class="btn bg-primary elevation-2 btn-sm btn-block {{ str_contains($theme->sidebar, 'primary') ? 'active' : '' }}">bg-primary</button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="sidebars('warning')" class="btn bg-warning elevation-2 btn-sm btn-block {{ str_contains($theme->sidebar, 'warning') ? 'active' : '' }}">bg-warning</button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="sidebars('info')" class="btn bg-info elevation-2 btn-sm btn-block {{ str_contains($theme->sidebar, 'info') ? 'active' : '' }}">bg-info</button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="sidebars('danger')" class="btn bg-danger elevation-2 btn-sm btn-block {{ str_contains($theme->sidebar, 'danger') ? 'active' : '' }}">bg-danger</button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="sidebars('success')" class="btn bg-success elevation-2 btn-sm btn-block {{ str_contains($theme->sidebar, 'success') ? 'active' : '' }}">bg-success</button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="sidebars('indigo')" class="btn bg-indigo elevation-2 btn-sm btn-block {{ str_contains($theme->sidebar, 'indigo') ? 'active' : '' }}">bg-indigo</button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="sidebars('lightblue')" class="btn bg-lightblue elevation-2 btn-sm btn-block {{ str_contains($theme->sidebar, 'lightblue') ? 'active' : '' }}">bg-lightblue</button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="sidebars('navy')" class="btn bg-navy elevation-2 btn-sm btn-block {{ str_contains($theme->sidebar, 'navy') ? 'active' : '' }}">bg-navy</button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="sidebars('purple')" class="btn bg-purple elevation-2 btn-sm btn-block {{ str_contains($theme->sidebar, 'purple') ? 'active' : '' }}">bg-purple</button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="sidebars('fuchsia')" class="btn bg-fuchsia elevation-2 btn-sm btn-block {{ str_contains($theme->sidebar, 'fuchsia') ? 'active' : '' }}">bg-fuchsia</button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="sidebars('pink')" class="btn bg-pink elevation-2 btn-sm btn-block {{ str_contains($theme->sidebar, 'pink') ? 'active' : '' }}">bg-pink</button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="sidebars('maroon')" class="btn bg-maroon elevation-2 btn-sm btn-block {{ str_contains($theme->sidebar, 'maroon') ? 'active' : '' }}">bg-maroon</button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="sidebars('orange')" class="btn bg-orange elevation-2 btn-sm btn-block {{ str_contains($theme->sidebar, 'orange') ? 'active' : '' }}">bg-orange</button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="sidebars('lime')" class="btn bg-lime elevation-2 btn-sm btn-block {{ str_contains($theme->sidebar, 'lime') ? 'active' : '' }}">bg-lime</button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="sidebars('teal')" class="btn bg-teal elevation-2 btn-sm btn-block {{ str_contains($theme->sidebar, 'teal') ? 'active' : '' }}">bg-teal</button>
            </div>
            <div class="col-md-3 mb-2">
              <button type="button" onclick="sidebars('olive')" class="btn bg-olive elevation-2 btn-sm btn-block {{ str_contains($theme->sidebar, 'olive') ? 'active' : '' }}">bg-olive</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div id="cardDefault" class="card {{ Auth::user()->theme->card_default }}">
        <div class="card-header">
          <h3 class="card-title">Card Default</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-tint"></i></span>
            </div>
            <input id="cardDefaultInput" name="cardDefaultInput" type="text" class="form-control @error('cardDefaultInput') is-invalid @enderror"
                   placeholder="Card Color"
                   value="{{ old('cardDefaultInput') ?: $theme->card_default }}"
                   readonly>
          </div>
          <div class="row">
            <div class="col-md-4 mb-2">
              <button type="button" onclick="cardDefault('card-primary')" class="btn bg-primary elevation-2 btn-sm btn-block {{ str_contains($theme->card_default, 'card-primary') ? 'active' : '' }}">primary</button>
            </div>
            <div class="col-md-4 mb-2">
              <button type="button" onclick="cardDefault('card-secondary')" class="btn bg-secondary elevation-2 btn-sm btn-block {{ str_contains($theme->card_default, 'card-primary') ? 'active' : '' }}">secondary
              </button>
            </div>
            <div class="col-md-4 mb-2">
              <button type="button" onclick="cardDefault('card-success')" class="btn bg-success elevation-2 btn-sm btn-block {{ str_contains($theme->card_default, 'card-primary') ? 'active' : '' }}">success</button>
            </div>
            <div class="col-md-4 mb-2">
              <button type="button" onclick="cardDefault('card-info')" class="btn bg-info elevation-2 btn-sm btn-block {{ str_contains($theme->card_default, 'card-primary') ? 'active' : '' }}">info</button>
            </div>
            <div class="col-md-4 mb-2">
              <button type="button" onclick="cardDefault('card-danger')" class="btn bg-danger elevation-2 btn-sm btn-block {{ str_contains($theme->card_default, 'card-primary') ? 'active' : '' }}">danger</button>
            </div>
            <div class="col-md-4 mb-2">
              <button type="button" onclick="cardDefault('card-warning')" class="btn bg-warning elevation-2 btn-sm btn-block {{ str_contains($theme->card_default, 'card-primary') ? 'active' : '' }}">warning</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div id="cardOutline" class="card card-outline {{ Auth::user()->theme->card_outline }}">
        <div class="card-header">
          <h3 class="card-title">Card Outline</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-tint"></i></span>
            </div>
            <input id="cardOutlineInput" name="cardOutlineInput" type="text" class="form-control @error('cardOutlineInput') is-invalid @enderror"
                   placeholder="Card Color"
                   value="{{ old('cardOutlineInput') ?: $theme->card_outline }}"
                   readonly>
          </div>
          <div class="row">
            <div class="col-md-4 mb-2">
              <button type="button" onclick="cardOutline('card-primary')" class="btn bg-primary elevation-2 btn-sm btn-block {{ str_contains($theme->card_default, 'card-primary') ? 'active' : '' }}">primary</button>
            </div>
            <div class="col-md-4 mb-2">
              <button type="button" onclick="cardOutline('card-secondary')" class="btn bg-secondary elevation-2 btn-sm btn-block {{ str_contains($theme->card_default, 'card-primary') ? 'active' : '' }}">secondary
              </button>
            </div>
            <div class="col-md-4 mb-2">
              <button type="button" onclick="cardOutline('card-success')" class="btn bg-success elevation-2 btn-sm btn-block {{ str_contains($theme->card_default, 'card-primary') ? 'active' : '' }}">success</button>
            </div>
            <div class="col-md-4 mb-2">
              <button type="button" onclick="cardOutline('card-info')" class="btn bg-info elevation-2 btn-sm btn-block {{ str_contains($theme->card_default, 'card-primary') ? 'active' : '' }}">info</button>
            </div>
            <div class="col-md-4 mb-2">
              <button type="button" onclick="cardOutline('card-danger')" class="btn bg-danger elevation-2 btn-sm btn-block {{ str_contains($theme->card_default, 'card-primary') ? 'active' : '' }}">danger</button>
            </div>
            <div class="col-md-4 mb-2">
              <button type="button" onclick="cardOutline('card-warning')" class="btn bg-warning elevation-2 btn-sm btn-block {{ str_contains($theme->card_default, 'card-primary') ? 'active' : '' }}">warning</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div id="cardColorBlock" class="card {{ Auth::user()->theme->card_bg_color }}">
        <div class="card-header">
          <h3 class="card-title">Card Color</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-tint"></i></span>
            </div>
            <input id="cardColorBlockInput" name="cardColorBlockInput" type="text" class="form-control @error('cardColorBlockInput') is-invalid @enderror"
                   placeholder="Card Color"
                   value="{{ old('cardColorBlockInput') ?: $theme->card_bg_color }}"
                   readonly>
          </div>
          <div class="row">
            <div class="col-md-4 mb-2">
              <button type="button" onclick="cardColorBlock('bg-primary')" class="btn bg-primary elevation-2 btn-sm btn-block {{ str_contains($theme->card_default, 'card-primary') ? 'active' : '' }}">primary</button>
            </div>
            <div class="col-md-4 mb-2">
              <button type="button" onclick="cardColorBlock('bg-secondary')" class="btn bg-secondary elevation-2 btn-sm btn-block {{ str_contains($theme->card_default, 'card-primary') ? 'active' : '' }}">secondary
              </button>
            </div>
            <div class="col-md-4 mb-2">
              <button type="button" onclick="cardColorBlock('bg-success')" class="btn bg-success elevation-2 btn-sm btn-block {{ str_contains($theme->card_default, 'card-primary') ? 'active' : '' }}">success</button>
            </div>
            <div class="col-md-4 mb-2">
              <button type="button" onclick="cardColorBlock('bg-info')" class="btn bg-info elevation-2 btn-sm btn-block {{ str_contains($theme->card_default, 'card-primary') ? 'active' : '' }}">info</button>
            </div>
            <div class="col-md-4 mb-2">
              <button type="button" onclick="cardColorBlock('bg-danger')" class="btn bg-danger elevation-2 btn-sm btn-block {{ str_contains($theme->card_default, 'card-primary') ? 'active' : '' }}">danger</button>
            </div>
            <div class="col-md-4 mb-2">
              <button type="button" onclick="cardColorBlock('bg-warning')" class="btn bg-warning elevation-2 btn-sm btn-block {{ str_contains($theme->card_default, 'card-primary') ? 'active' : '' }}">warning</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
@endsection

@section('addCss')
  <!-- Toastr -->
  <link rel="stylesheet" href="{{ asset('plugins/toastr/toastr.min.css') }}">
@endsection

@section('addJs')
  <!-- Toastr -->
  <script src="{{ asset('plugins/toastr/toastr.min.js') }}"></script>

  <script>
    let typeSidebar

    if ("{{str_contains($theme->sidebar, 'sidebar-dark') ? 0 : 1 }}" === "0") {
      typeSidebar = "sidebar-dark-"
    } else {
      typeSidebar = "sidebar-light-"
    }

    $('#option-dark').click(function () {
      typeSidebar = "sidebar-dark-"
    });

    $('#option-light').click(function () {
      typeSidebar = "sidebar-light-"
    });

    function navbars(param) {
      $('#navbarContent').removeClass().addClass('main-header navbar navbar-expand ' + param);
      $('#navbarInput').val(param);
    }

    function brandLogos(param) {
      $('#brandLogoContent').removeClass().addClass('brand-link ' + param);
      $('#brandLogoInput').val(param);
    }

    function accents(param) {
      $('#bodyContent').removeClass().addClass('hold-transition sidebar-mini ' + param);
      $('#accentInput').val(param);
    }

    function sidebars(param) {
      $('#sidebarContent').removeClass().addClass('main-sidebar elevation-4 ' + typeSidebar + param);
      $('#sidebarInput').val(typeSidebar + param);
    }

    function cardDefault(param) {
      $('#cardDefault').removeClass().addClass('card ' + param);
      $('#cardDefaultInput').val(param);
    }

    function cardOutline(param) {
      $('#cardOutline').removeClass().addClass('card card-outline ' + param);
      $('#cardOutlineInput').val(param);
    }

    function cardColorBlock(param) {
      $('#cardColorBlock').removeClass().addClass('card ' + param);
      $('#cardColorBlockInput').val(param);
    }

    $(function () {
      @error('navbarInput')
      toastr.error("{{ str_replace('navbarInput', 'navbar', $message) }}");
      @enderror

      @error('brandLogoInput')
      toastr.error("{{ str_replace('brandLogoInput', 'brand logo', $message) }}");
      @enderror

      @error('accentInput')
      toastr.error("{{ str_replace('accentInput', 'accent', $message) }}");
      @enderror

      @error('sidebarInput')
      toastr.error("{{ str_replace('sidebarInput', 'sidebar', $message) }}");
      @enderror

      @error('cardDefaultInput')
      toastr.error("{{ str_replace('cardDefaultInput', 'card default', $message) }}");
      @enderror

      @error('cardOutlineInput')
      toastr.error("{{ str_replace('cardOutlineInput', 'card outline', $message) }}");
      @enderror

      @error('cardColorBlockInput')
      toastr.error("{{ str_replace('cardColorBlockInput', 'card color', $message) }}");
      @enderror
    });
  </script>
@endsection