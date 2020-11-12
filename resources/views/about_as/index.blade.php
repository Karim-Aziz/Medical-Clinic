@php
if (Session::get('app_locale') == 'ar') {
App::setLocale('ar');
} else {
App::setLocale('en');
Session::put(App::setLocale('en'));
}
@endphp
@extends('layouts.app')
@section('title','About As')
@section('content')

  <!-- Start About Page -->
  <div class="back-color">
    <div class="container">
      <h1>@lang('About Us')</h1>
    </div>
  </div>
  <!-- End About Page -->
  <!-- Start About Us Section -->
  <div class="about-us @if (App::isLocale('ar'))  text-right  @endif" ddata-aos="fade-up" data-aos-duration="3000" id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h5>@lang('About Us')</h5>
          <p class="display-4">
            @if (App::isLocale('ar'))
            {!! @$about_as->about_company_ar !!}
            @else
            {!! @$about_as->about_company !!}
            @endif
          </p>
        </div>

        <div class="col-md-5">
          <img class="mt-4" src="images/about.png" alt="About Us" />
        </div>
      </div>
    </div>
  </div>
  <!-- End About Us Section -->
@endsection
