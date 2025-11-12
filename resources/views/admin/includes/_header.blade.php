@php
    $setting = App\Models\Setting::first();
@endphp

<header class="main-header">

    <!-- Logo -->
    <a href="" class="logo">
      <span class="logo-mini"><b>R</b></span>
      <span class="logo-lg"><b>{{ env('APP_NAME') }}</b></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">

        <ul class="nav navbar-nav">
          {{-- <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle text-right" data-toggle="dropdown" title="App Language" data-toggle='tooltip'>
              <i class="fa fa-globe fa-lg"></i> &nbsp;
              {{ trans('backend.language') }}
            </a>
            <ul class="dropdown-menu" style="width: auto;height: auto;">
              <li>
                <ul class="menu languages">
                    @php
                        $locales = config('app.locales', ['ar' => 'العربية', 'fr' => 'Français']);
                    @endphp
                    @foreach($locales as $localeCode => $native)
                        @if($localeCode != app()->getLocale())
                            <li>
                                <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ url()->current() }}?lang={{ $localeCode }}">
                                    {{ $native }}
                                </a>
                            </li>
                        @endif
                    @endforeach
                </ul>
              </li>

            </ul>
          </li> --}}

          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ auth()->user()->name }} {{auth()->user()->name }}</span>
            </a>

            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                 {{-- @if(!empty($setting->logo))
                        <img src="{{ asset('storage/' . $setting->logo) }}" alt="Logo" class="img-thumbnail mb-2" style="max-height:80px;">
                    @endif --}}
                <img src="{{ asset('storage/' . $setting->logo) }}" class="img-circle" alt="User Image">
                <p>
                 {{ auth()->user()->email }} <small></small>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="row">
                  <div class="col-md-12">
                    {{-- <div class="">
                      <a href="" style="margin-bottom:10px" class="btn btn-default btn-block "> <i class="fa fa-user fa-fw"></i> {{ trans('backend.profile') }}</a>
                    </div> --}}
                  </div>
                  <div class="col-md-12">
                    <div class="">
                      <form action="" method="POST">
                          @csrf
                          <button type="submit" style="cursor:pointer" class="btn btn-default btn-block confirm_logout"><i class="fa fa-power-off fa-fw"></i> Deconnexion</button>
                      </form>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </li>

        </ul>
      </div>

    </nav>
  </header>
