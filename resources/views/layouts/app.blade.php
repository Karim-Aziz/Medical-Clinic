@php
    if (Session::get('app_locale') == 'ar') {
        App::setLocale('ar');
    } else {
        App::setLocale('en');
        Session::put(App::setLocale('en'));
    }
@endphp

<!DOCTYPE html>
@if (App::isLocale('ar'))
<html dir="rtl">
@else
<html lang="en">
@endif

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Vu Digtal | @yield('title')</title>
  <!-- Import Bootstrap Css File -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
  <!-- Import Fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
    crossorigin="anonymous" />
    <!-- Google Font -->
  @if (App::isLocale('ar'))
  <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet" />
  @else
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet" />
  @endif

  <!-- Aos Animation Css -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

  <!-- Import Custom Styles File -->
  <link rel="stylesheet" href="{{ url('/css/style.css') }}" />
   @if (App::isLocale('ar'))
    <!-- Import Custom Styles AR File -->
  <link rel="stylesheet" href="{{ url('/css/style-ar.css') }}" />
  @endif

  <!-- Media Style -->
  <link rel="stylesheet" href="{{ url('/css/media.css') }}" />
  @yield('css')
  @php
      $home_desc = App\home_desc::first();
  @endphp
  <style>
    .img-background {
      background: url("{{ @$home_desc->image ? '/img/home_desc/'.$home_desc->image : url('/img/bac-img.jpg')}}") no-repeat top center;
    }
  </style>
</head>



<body>
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

    <!-- ***************************************************************** -->
    @yield('content')
     <!-- Start Footer Section -->
    <div class="footer @if (App::isLocale('ar'))  text-right  @endif">
      <div class="container">
        <div class="row">
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h5 class="mb-5">@lang('Scenic Products')</h5>
            <ul class="list-group list-unstyled @if (App::isLocale('ar'))  ar-list @endif">
              <li><i class="fas @if (App::isLocale('ar')) fa-caret-left ml-2 @else fa-caret-right mr-2 @endif"></i>@lang('Web Design') </li>
              <li><i class="fas @if (App::isLocale('ar')) fa-caret-left ml-2 @else fa-caret-right mr-2 @endif"></i>@lang('Graphic Design') </li>
              <li><i class="fas @if (App::isLocale('ar')) fa-caret-left ml-2 @else fa-caret-right mr-2 @endif"></i>@lang('Web Developers') </li>
              <li>
                <i class="fas @if (App::isLocale('ar')) fa-caret-left ml-2 @else fa-caret-right mr-2 @endif"></i>@lang('Marketing Strategy')
              </li>
            </ul>
          </div>

          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h5 class="mb-5">@lang('Company')</h5>
            <ul class="list-group list-unstyled @if (App::isLocale('ar'))  ar-list @endif">
              <li><i class="fas @if (App::isLocale('ar')) fa-caret-left ml-2 @else fa-caret-right mr-2 @endif"></i>@lang('Home') </li>
              <li><i class="fas @if (App::isLocale('ar')) fa-caret-left ml-2 @else fa-caret-right mr-2 @endif"></i>@lang('About Us') </li>
              <li><i class="fas @if (App::isLocale('ar')) fa-caret-left ml-2 @else fa-caret-right mr-2 @endif"></i>@lang('Portfolio') </li>
              <li><i class="fas @if (App::isLocale('ar')) fa-caret-left ml-2 @else fa-caret-right mr-2 @endif"></i>@lang('Contact') </li>
            </ul>
          </div>

          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h5 class="mb-5">@lang('Support')</h5>
            <ul class="list-group list-unstyled @if (App::isLocale('ar'))  ar-list @endif">
              <li><i class="fas @if (App::isLocale('ar')) fa-caret-left ml-2 @else fa-caret-right mr-2 @endif"></i>@lang('Supports') </li>
              <li><i class="fas @if (App::isLocale('ar')) fa-caret-left ml-2 @else fa-caret-right mr-2 @endif"></i>@lang('Privacy') </li>
              <li><i class="fas @if (App::isLocale('ar')) fa-caret-left ml-2 @else fa-caret-right mr-2 @endif"></i>@lang('Terms of Service') </li>
            </ul>
          </div>

          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h5 class="mb-5">@lang('Contact')</h5>
            <div class="wrapper text-center">
              <div class="icon facebook">

                <div class="tooltip">Facebook</div>
                <a href="{{ @$settings->Facebook }}" target="_blank">
                  <span><i class="fab fa-facebook-f"></i></span>
                </a>
              </div>
              <div class="icon twitter">
                <div class="tooltip">Twitter</div>
                <a href="{{ @$settings->Twitter }}" target="_blank">
                  <span><i class="fab fa-twitter"></i></span>
                </a>
              </div>
              <div class="icon instagram">
                <div class="tooltip">Instagram</div>
                <a href="{{ @$settings->Instegram }}" target="_blank">
                  <span><i class="fab fa-instagram"></i></span>
                </a>
              </div>

              <div class="icon youtube">
                <div class="tooltip">YouTube</div>
                <a href="{{ @$settings->YouTube }}" target="_blank">
                  <span><i class="fab fa-youtube"></i></span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- Start Copyright -->
        <div class="copyright text-center mt-5 lead">
          @if (!App::isLocale('ar'))
          <p>Copyright © <b>2020</b> All rights reserved | Vu Digital</p>
          @else
          <p>Copyright © <b>2020</b> جميع الحقوق محفوظة | Vu Digital</p>
          @endif
        </div>
      </div>
    </div>
  <!-- End Footer Section -->

<!-- Import Bootstrap Js File -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>

  <!-- Import isotope-->
  <script src="{{ url('/js/isotope.min.js') }}"></script>

  <!-- Aos Animation Js -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- Import Custom Js File -->
  <script src="{{ url('/js/custom.js') }}"></script>
    @yield('js')
    </body>

</html>
