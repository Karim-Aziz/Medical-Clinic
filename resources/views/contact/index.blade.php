@php
if (Session::get('app_locale') == 'ar') {
App::setLocale('ar');
} else {
App::setLocale('en');
Session::put(App::setLocale('en'));
}
@endphp
@extends('layouts.app')
@section('title') Contact Us @endsection
@section('content')
    <div class="contact">
      <div class="container">
        <div class="con-bac">
          <div class="row" data-aos="zoom-in" data-aos-duration="1500">
            <div class="col-md-7">
              <div class="contact-info">
                <h1>Contact Us</h1>
                <p>
                  Let us know your problem, make an appointment and receive the
                  best advice from specialists in the field.
                </p>

                <form>
                  <div class="row">
                    <div class="col-md-6">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="First name"
                      />
                    </div>
                    <div class="col-md-6">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Last name"
                      />
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Phone"
                      />
                    </div>
                    <div class="col-md-6">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Email"
                      />
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <textarea
                        class="form-control"
                        cols="30"
                        rows="5"
                        placeholder="Message"
                      ></textarea>
                    </div>
                  </div>
                  <button class="btn-block">Send</button>
                </form>
              </div>
            </div>
            <div class="col-md-5">
              <img class="mt-5" src="images/contact.png" alt="" srcset="" />
            </div>
          </div>
        </div>

        <!-- Start Map -->
        <div class="map mt-5">
          <div class="heading-main">
            <h4 class="text-uppercase">
              <i class="fas fa-search-location"></i> My Locatins
            </h4>
          </div>
          <div style="width: 100%">
            <iframe
              width="100%"
              height="600"
              frameborder="0"
              scrolling="no"
              marginheight="0"
              marginwidth="0"
              src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=El%20Sudan%20st%20Cairo,%20Cairo%20Governorate,%20Egypt%2013611+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
            ></iframe
            ><a href="https://www.maps.ie/route-planner.htm">Journey Planner</a>
          </div>
        </div>
      </div>
    </div>
    <!-- =========== End Contact Page =========== -->

    <!-- =========== Start All Clinic  =========== -->
    <div class="all-clinic">
      <div class="container">
        <div class="heading-main text-center mb-5">
          <h1 class="text-uppercase">All Clinic</h1>
        </div>
        <div class="row" data-aos="zoom-in" data-aos-duration="1500">
          <div class="col-lg-4">
            <div class="clinic-info">
              <h5 class="text-center">6th of October Clinic</h5>
              <ul class="list-group">
                <li>
                  <i class="far fa-calendar-check"></i> Sunday of every week
                  from 10 am to 1 pm
                </li>
                <li><i class="fas fa-phone-alt"></i> 01115463584</li>
                <li><i class="fas fa-location-arrow"></i> Address</li>
              </ul>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="clinic-info">
              <h5 class="text-center">6th of Giza Clinic</h5>
              <ul class="list-group">
                <li>
                  <i class="far fa-calendar-check"></i> Sunday of every week
                  from 10 am to 1 pm
                </li>
                <li><i class="fas fa-phone-alt"></i> 01115463584</li>
                <li><i class="fas fa-location-arrow"></i> Address</li>
              </ul>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="clinic-info">
              <h5 class="text-center">6th of Zayed Clinic</h5>
              <ul class="list-group">
                <li>
                  <i class="far fa-calendar-check"></i> Sunday of every week
                  from 10 am to 1 pm
                </li>
                <li><i class="fas fa-phone-alt"></i> 01115463584</li>
                <li><i class="fas fa-location-arrow"></i> Address</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
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

  @endsection

