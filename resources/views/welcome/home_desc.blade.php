@php
if (Session::get('app_locale') == 'ar') {
    $home_desc = App\home_desc::select('desc_ar AS description')->first();
} else {
App::setLocale('en');
    $home_desc = App\home_desc::select('desc AS description')->first();
}
@endphp
<!-- =========== Start Full Img  =========== -->
    <div class="landing-page @if (App::isLocale('ar'))  text-right  @endif">
      <div class="container">
        <div class="page-content">
          @if (App::isLocale('ar'))
            <h1>دكتور / <span class="type"></span></h1>
          @else
          <h1>DR. <span class="type"></span></h1>
          @endif
          @isset($home_desc->description)
              {!! $home_desc->description !!}
          @endisset
          <a href="#"> @lang('Doctor Service')</a>
        </div>
      </div>
    </div>
    <!-- =========== End Full Img  =========== -->

    <!-- =========== Start Icons  =========== -->
    <div class="fix-icons">
      <a href="{{ @$settings->Facebook }}" data-toggle="tooltip" data-placement="right" title="Facebook" target="_blank"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <a href="tel:{{ @$settings->phone }}" data-toggle="tooltip" data-placement="right" title="Phone"
        ><i class="fas fa-phone-volume"></i
      ></a>

      <a href="https://wa.me/{{ str_replace('+', '', @$settings->phone) }}/?text=Hello" data-toggle="tooltip"
        data-placement="right" title="Whatsapp"><i class="fab fa-whatsapp"></i></a>
    </div>
    <!-- =========== End Icons  =========== -->

