@php
if (Session::get('app_locale') == 'ar') {
    $home_desc = App\home_desc::select('desc_ar AS description')->first();
} else {
App::setLocale('en');
    $home_desc = App\home_desc::select('desc AS description')->first();
}
@endphp
<!-- Start Landing Page -->
  <div class="landing-page @if (App::isLocale('ar'))  text-right  @endif">
    <div class="page-content" data-aos="flip-left" data-aos-duration="2000">
        @isset($home_desc->description)
            {!! $home_desc->description !!}
        @endisset

      <a href="#">Get in touch</a>
    </div>
  </div>
  <!-- End Landing Page -->

