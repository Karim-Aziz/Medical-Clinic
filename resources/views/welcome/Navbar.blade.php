<!-- =========== Start Header Top =========== -->
    <div class="header-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <ul class="@if (App::isLocale('ar'))  text-right  @endif">
              <li><i class="fas fa-phone-alt"></i> {{ @$settings->phone }} </li>
              <li>
                <i class="far fa-envelope-open"></i>  {{ @$settings->email }}
              </li>
            </ul>
          </div>
          <div class="col-lg-4  @if (App::isLocale('ar'))  text-left @else  text-right @endif">
            <div>
              <a class="ml-3" href="{{ @$settings->Facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
              <a class="ml-3" href="{{ @$settings->Instegram }}" target="_blank"><i class="fab fa-instagram"></i></a>
              <a class="ml-3" href="{{ @$settings->YouTube }}" target="_blank"><i class="fab fa-youtube"></i></a>
              <a class="ml-3" href="{{ @$settings->Twitter }}" target="_blank"><i class="fab fa-twitter"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- =========== End Header Top =========== -->

    <!-- =========== Start Navbar =========== -->
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
          <img src="{{url('/img/logo/'.@$settings->logo->name)}}" alt="logo">
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-align-justify"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav m-auto">
            <a class="nav-link active ml-2" href="{{ url('/') }}">@lang('Home')</a>
            <a class="nav-link ml-2" href="{{ url('/about_us') }}">@lang('About Doctor')</a>
            <li class="nav-item dropdown ml-2">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                @lang('Our Services')
              </a>
              <div
                class="dropdown-menu dropdown-menu-right animate slideIn"
                aria-labelledby="navbarDropdown"
              >
                @if (count($pages) > 0)
                    @foreach ($pages as $page)
                        @if (App::isLocale('ar'))
                          <a class="dropdown-item" href="{{url('/pages/'.@$page->id)}}"> {{ @$page->name_ar }}</a>
                        @else
                          <a class="dropdown-item" href="{{url('/pages/'.@$page->id)}}"> {{ @$page->name }}</a>
                        @endif
                    @endforeach
                @endif
              </div>
            </li>
            <a class="nav-link ml-2" href="{{ url('/contact') }}">@lang('Contact Us')</a>
          </div>
          <div class="lang">
            <a class="nav-link ml-2 @if (App::isLocale('en'))  active  @endif" href="{{url('/en')}}">En</a>
            <a class="nav-link ml-2 @if (App::isLocale('ar'))  active  @endif" href="{{url('/ar')}}">AR</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- =========== End Navbar =========== -->
