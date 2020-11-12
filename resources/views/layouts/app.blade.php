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
  <title> Simle Pure | @yield('title') </title>
  <!-- Import Bootstrap Css File -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
  <!-- Import Fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
    crossorigin="anonymous" />
  <!-- Google Font -->

  <link
    href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600&display=swap"
    rel="stylesheet" />

  <!-- =========== Import slick =========== -->
    <link rel="stylesheet" href="{{ url('/lib/slick/slick/slick.css') }}" />
    <link rel="stylesheet" href="{{ url('/lib/slick/slick/slick-theme.css') }}" />

  <!-- =========== Import Aos =========== -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />


  <!-- Import Custom Styles File -->
  <link rel="stylesheet" href="{{ url('/css/custom.css') }}" />
   @if (App::isLocale('ar'))
    <!-- Import Custom Styles AR File -->
  <link rel="stylesheet" href="{{ url('/css/custom-ar.css') }}" />
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
    <!-- =========== Start Header Top =========== -->
    <div class="header-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <ul>
              <li><i class="fas fa-phone-alt"></i> {{ @$settings->phone }} </li>
              <li>
                <i class="far fa-envelope-open"></i>  {{ @$settings->email }}
              </li>
            </ul>
          </div>
          <div class="col-lg-4 text-right">
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
                <a class="dropdown-item" href="services.html"
                  >Hearing impairment
                </a>
                <a class="dropdown-item" href="services.html"
                  >Nose detection
                </a>
                <a class="dropdown-item" href="services.html"
                  >Cultivate a shell
                </a>
                <a class="dropdown-item" href="services.html"
                  >Tinnitus treatment
                </a>
              </div>
            </li>
            <a class="nav-link ml-2" href="{{ url('/contact') }}">@lang('CONTACT US')</a>
          </div>
          <div class="lang">
            <a class="nav-link ml-2 @if (App::isLocale('en'))  active  @endif" href="{{url('/en')}}">En</a>
            <a class="nav-link ml-2 @if (App::isLocale('ar'))  active  @endif" href="{{url('/ar')}}">AR</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- =========== End Navbar =========== -->



    <!-- ***************************************************************** -->
    @yield('content')
    <!-- =========== Start Footer  =========== -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <img class="mb-5" src="images/logo-footer.png" alt="logo footer" />
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos ex
              eaque similique nostrum
            </p>
          </div>

          <div class="col-md-3">
            <h5 class="mb-5"> @lang('Dr. services')</h5>
            <ul class="list-group list-unstyled">
              <li>
                <a href="#"> <i class="fas fa-link"></i> @lang('Tinnitus treatment ') </a>
              </li>
              <li>
                <a href="#"> <i class="fas fa-link"></i> @lang('Vertigo treatment') </a>
              </li>
              <li>
                <a href="#">
                  <i class="fas fa-link"></i> @lang('Hearing impairment treatment')
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fas fa-link"></i> @lang('Cochlear implantation')
                </a>
              </li>
            </ul>
          </div>

          <div class="col-md">
            <h5 class="mb-5">@lang('Important links')</h5>
            <ul class="list-group list-unstyled">
              <li>
                <a href="#"> <i class="fas fa-link"></i> @lang('About Doctor')  </a>
              </li>
              <li>
                <a href="#"> <i class="fas fa-link"></i> @lang('Service')  </a>
              </li>
              <li>
                <a href="#"> <i class="fas fa-link"></i> @lang('Article')  </a>
              </li>
              <li>
                <a href="#"> <i class="fas fa-link"></i> @lang('Contact Us') Contact Us </a>
              </li>
            </ul>
          </div>

          <div class="col-md">
            <h5 class="mb-5">@lang('Contact Us')</h5>
            <div class="footer-icon">
              <a href="{{ @$settings->Facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
              <a href="{{ @$settings->Twitter }}" target="_blank"><i class="fab fa-twitter"></i></a>
              <a href="{{ @$settings->YouTube }}" target="_blank"><i class="fab fa-youtube"></i></a>
              <a href="{{ @$settings->Instegram }}" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>

            <ul class="list-group list-unstyled">
              <li>
                <a href="#">
                  <i class="fas fa-phone-alt mr-2"></i>{{ @$settings->phone }}
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fas fa-mail-bulk mr-2"></i>{{ @$settings->email }}
                </a>
              </li>
            </ul>
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
    <!-- =========== End Footer  =========== -->


<!-- =========== Start Js Files=========== -->
    <!-- =========== Import Bootstrap Js Files =========== -->
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
      crossorigin="anonymous"
    ></script>
    <!-- =========== Import slick =========== -->
    <script src="{{ url('/lib/slick/slick/slick.min.js') }}"></script>
    <!-- typed js -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>

    <!-- =========== Import Aos =========== -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- =========== Import Custom Js =========== -->
    <script src="{{ url('/js/custom.js') }}"></script>
    <script src="{{ url('/js/type_custom.js') }}"></script>

    </body>

</html>
