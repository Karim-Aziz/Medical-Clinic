@php
if (Session::get('app_locale') == 'ar') {
App::setLocale('ar');
} else {
App::setLocale('en');
Session::put(App::setLocale('en'));
}
@endphp
@extends('layouts.app')
@section('content')
  <!-- Start About Page -->
  <div class="back-color">
    <div class="container">
      <h1>@lang('Portfolio')</h1>
    </div>
  </div>
  <!-- End About Page -->
@if ($pages->count() > 0)
 <div class="portfolio" data-aos="fade-up" data-aos-duration="3000">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <ul class="filters text-center">
            <li class="active" data-filter="*"><a href="#!">@lang('All')</a></li>
            @foreach ($pages as $page)
            @if (App::isLocale('ar'))
                <li data-filter=".{{$page->name}}"><a href="#!">{{$page->name_ar}}</a></li>
            @else
                <li data-filter=".{{$page->name}}"><a href="#!">{{$page->name}}</a></li>
            @endif
            @endforeach
          </ul>
          <div class="projects">
            <div class="row">
  @foreach ($pages as $page)
      @foreach (@$page->places as $place)
      <!-- Start Web Projects -->
        <div class="col-lg-4 item {{$page->name}}">
          <div class="card">
            <div class="card-head">
              <img src="{{'/img/places_images/'.@$place->image->name}}" alt="" class="img-fluid card-img" />
            </div>

            <div class="card-body text-center">
              <a href="{{$place->url}}" class="btn btn-lg card-btn">@lang('See Project')</a>
            </div>
          </div>
        </div>
      @endforeach
  @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endif


@endsection

