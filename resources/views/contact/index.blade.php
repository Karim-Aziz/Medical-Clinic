@php
if (Session::get('app_locale') == 'ar') {
App::setLocale('ar');
} else {
App::setLocale('en');
Session::put(App::setLocale('en'));
}
@endphp
@extends('layouts.app')
@section('title','Contact Us')
@section('content')
<!-- Start About Page -->
  <div class="back-color">
    <div class="container">
      <h1>@lang('CONTACT US')</h1>
    </div>
  </div>
  <!-- End About Page -->

  <!-- Start Contact Section -->
  <div class="contact @if (App::isLocale('ar'))  text-right  @endif" data-aos="fade-up" data-aos-duration="3000">
    <div class="container">
      <div class="title-contact">
        <h5 class="text-uppercase text-center">@lang('CONTACT US')</h5>
        <h2 class="text-uppercase text-center">@lang('Have a Project?')</h2>
      </div>

      <div class="row">
        <div class="col-md-7">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
          <div class="contact-form">
            <form role="form" class="text-center" action="{{url('/contact/insert')}}" method="post">
            {{ csrf_field() }}
              <div class="row">
                <div class="col">
                  <div class="form-group">
                        <input type="text" class="form-control" id="name" placeholder="@lang('Name')" name="name"
                            value="{{old('name')}}" required>
                        @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="col">
                  <div class="form-group">
                        <input type="text" class="form-control" id="phone" placeholder="@lang('phone')" name="phone"
                            value="{{old('phone')}}" required>
                        @if ($errors->has('phone'))
                        <span class="help-block">
                            <strong>{{ $errors->first('phone') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
              </div>

              <div class="row">
                <div class="col">
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="@lang('Email')"
                            name="email" value="{{old('email')}}" required>
                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
              </div>

              <div class="row">
                <div class="col">
                    <div class="form-group">
                        <textarea class="form-control" rows="4" id="message" name="message"
                            placeholder="@lang('Your Message')">{{old('message')}}</textarea>
                        @if ($errors->has('message'))
                        <span class="help-block">
                            <strong>{{ $errors->first('message') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
              </div>
              <button type="submit" class="btn-block">@lang('Send')</button>
            </form>
          </div>
        </div>
        <div class="col-md-5">
          <div class="media mb-4 mt-4">
            <i class="fas fa-map-marker-alt @if (App::isLocale('ar'))   ml-3 @else  mr-3  @endif"></i>
            <div class="media-body">
              <h5>@lang('Address'):</h5>
              {{ @$settings->location }}
            </div>
          </div>

          <div class="media mb-4">
            <i class="fas fa-phone-alt @if (App::isLocale('ar'))   ml-3 @else  mr-3  @endif"></i>
            <div class="media-body">
              <h5>@lang('Phone'):</h5>
              {{ @$settings->phone }}
            </div>
          </div>

          <div class="media mb-4">
            <i class="far fa-envelope @if (App::isLocale('ar'))   ml-3 @else  mr-3  @endif"></i>
            <div class="media-body">
              <h5>@lang('Email'):</h5>
              {{ @$settings->email }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Contact Section -->

