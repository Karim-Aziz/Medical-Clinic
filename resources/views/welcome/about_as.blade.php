@php
$about_as = App\about_as::first();
@endphp
<!-- Start About Us Section -->
  <div class="about-us @if (App::isLocale('ar'))  text-right  @endif" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-duration="2000" id="about">
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
