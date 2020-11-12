@php
    if (Session::get('app_locale') == 'ar') {
        App::setLocale('ar');
    } else {
        App::setLocale('en');
        Session::put(App::setLocale('en'));
    }
@endphp

@extends('layouts.app')
@section('title', $page->name)
@section('content')
<!--  ======================= Start Our Travels ============================== -->
<div class="travels wow fadeInUp">
    <div class="container">
        <div class="travels-owl">
            <div class="row">
                @if ($places->count() > 0)
                @if (Session::get('app_locale') == 'ar')
                @foreach (@$places as $place)
                <div class="col-md-4">
                    <div class="card">
                        <a href="{{url('/places/'.@$place->id)}}">
                            <img src="{{'/img/places_images/'.@$place->first_image}}" alt="{{ $place->title_ar }}"  class="card-img-top">
                        </a>
                        <div class="card-body">
                            <h5>{{ $place->title_ar }}</h5>
                            <div class="row text-center">
                                <div class="col">
                                    <h6>{{ $place->feature1_ar }}</h6>
                                </div>
                                <div class="col">
                                    <h6>{{ $place->feature2_ar }}</h6>
                                </div>
                            </div>
                            <hr>
                            <div class="row text-center">
                                <div class="col">
                                    <h6>{{ $place->feature3_ar }}</h6>
                                </div>
                                <div class="col">
                                    <h6>{{ $place->feature4_ar }}</h6>
                                </div>
                            </div>
                            <a href="{{url('/places/'.@$place->id)}}">
                                <button class="btn-card btn-block">@lang('Explore')</button>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                @foreach (@$places as $place)
                <div class="col-md-4">
                    <div class="card">
                        <a href="{{url('/places/'.@$place->id)}}">
                            <img src="{{'/img/places_images/'.@$place->first_image}}" alt="{{ $place->title_ar }}" class="card-img-top">
                        </a>
                        <div class="card-body">
                            <h5>{{ $place->title }}</h5>
                            <div class="row text-center">
                                <div class="col">
                                    <h6>{{ $place->feature1 }}</h6>
                                </div>
                                <div class="col">
                                    <h6>{{ $place->feature2 }}</h6>
                                </div>
                            </div>
                            <hr>
                            <div class="row text-center">
                                <div class="col">
                                    <h6>{{ $place->feature3 }}</h6>
                                </div>
                                <div class="col">
                                    <h6>{{ $place->feature4 }}</h6>
                                </div>
                            </div>
                            <a href="{{url('/places/'.@$place->id)}}">
                                <button class="btn-card btn-block">@lang('Explore')</button>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
                @endif
                
            </div>
            <div class="pagination-dev">
                <nav>
                    <ul class="pagination justify-content-center">
                        {{$places->links('vendor.pagination.bootstrap-4')}}
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!--  ======================= End Our Travels ============================== -->
<!-- ***************************************************************** -->

@endsection