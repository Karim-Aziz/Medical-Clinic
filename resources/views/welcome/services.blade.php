@php
    $services = App\services::all();
@endphp
  <!-- Srart Services Section -->
  <div class="services text-center" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-duration="2000">
    <div class="container">
      <div class="info-title mb-5">
        <h5>@lang('Our Services')</h5>
        <h6 class="display-4">@lang('SERVICES')</h6>
      </div>
      <div class="row">
        @if (App::isLocale('ar'))
          @foreach (@$services as $service)
          <div class="col-md-4">
            <div class="card">
              <img src="{{ @$service->image->name ? '/img/services/'.$service->image->name : url('/dist/img/services2-160x160.jpg')}}" class="card-img-top" alt="{{$service->name_ar}}" />
              <div class="card-body">
                <h5 class="card-title">{{$service->name_ar}}</h5>
                <p class="card-text">
                  {!! $service->desc_ar !!}
                </p>
              </div>
            </div>
          </div>
          @endforeach
        @else
          @foreach (@$services as $service)
          <div class="col-md-4">
            <div class="card">
              <img src="{{ @$service->image->name ? '/img/services/'.$service->image->name : url('/dist/img/services2-160x160.jpg')}}" class="card-img-top" alt="{{$service->name}}" />
              <div class="card-body">
                <h5 class="card-title">{{$service->name}}</h5>
                <p class="card-text">
                  {!! $service->desc !!}
                </p>
              </div>
            </div>
          </div>
          @endforeach
        @endif

      </div>
    </div>
  </div>
  <!-- End Services Section -->
