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
<!-- =========== Start Services Page =========== -->
    <div class="all-services">
      <div class="container">
        <div class="row" data-aos="zoom-in" data-aos-duration="1500">
          <div class="col-md-9">
            <div class="all-ser-info">
              <img src="images/servises/4.jpg" alt="Services image" />
              <h2>Free dental care for our clients</h2>
              <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi
                molestias voluptatum magni hic suscipit, dignissimos repellat
                sed, iusto blanditiis praesentium porro nam. Assumenda officia
                sunt laudantium perspiciatis nihil fuga quidem!
              </p>

              <h3>What are the causes of hearing loss ?</h3>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Morbi leo risus</li>
                <li class="list-group-item">Porta ac consectetur ac</li>
                <li class="list-group-item">Vestibulum at eros</li>
              </ul>

              <h3>Risk factors that lead to hearing loss ?</h3>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Morbi leo risus</li>
                <li class="list-group-item">Porta ac consectetur ac</li>
                <li class="list-group-item">Vestibulum at eros</li>
              </ul>

              <h3>Hearing impairment treatment ?</h3>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Morbi leo risus</li>
                <li class="list-group-item">Porta ac consectetur ac</li>
                <li class="list-group-item">Vestibulum at eros</li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="show-ser">
              <form class="form-inline">
                <input class="form-control" placeholder="Search..." />
                <button type="submit"><i class="fas fa-search"></i></button>
              </form>
              <h4>All Services</h4>
              <ul class="list-group list-group-flush">
                <li
                  class="list-group-item list-group-item-action list-group-item-light"
                >
                  <a href="#">Cras justo odio</a>
                </li>
                <li
                  class="list-group-item list-group-item-action list-group-item-light"
                >
                  <a href="#">Dapibus ac facilisis in </a>
                </li>
                <li
                  class="list-group-item list-group-item-action list-group-item-light"
                >
                  <a href="#">Morbi leo risus </a>
                </li>
                <li
                  class="list-group-item list-group-item-action list-group-item-light"
                >
                  <a href="#">Porta ac consectetur ac </a>
                </li>
                <li
                  class="list-group-item list-group-item-action list-group-item-light"
                >
                  <a href="#">Vestibulum at eros </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- =========== End Services Page =========== -->
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
