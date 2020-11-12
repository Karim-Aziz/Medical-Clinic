   @php
   $settings = App\settings::first();
   $pages = App\pages::all();
   @endphp
   <!-- Start Header -->
  <nav class="navbar navbar-expand-md">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{url('/img/logo/'.@$settings->logo->name)}}" alt="logo">
        </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-align-right"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav m-auto">
        <a class="nav-link ml-5 text-uppercase active" href="{{ url('/') }}">@lang('Home')</a>

          <a class="nav-link ml-5 text-uppercase" href="{{ url('/about_us') }}">@lang('About')</a>
          <a class="nav-link ml-5 text-uppercase" href="{{ url('/Portfolio') }}">@lang('Portfolio')</a>
          <a class="nav-link ml-5 text-uppercase" href="{{ url('/contact') }}">@lang('Contact')</a>
        </div>

        <div class="lang">
            <a class="ml-4 text-uppercase @if (App::isLocale('en'))  active  @endif" href="{{url('/en')}}">En</a>
            <a class="ml-4 text-uppercase @if (App::isLocale('ar'))  active  @endif" href="{{url('/ar')}}">AR</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- End Header -->
