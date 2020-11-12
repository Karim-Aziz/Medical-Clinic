  @php
  $settings = App\settings::first();
  @endphp
  <!-- Start Footer Section -->
    <div class="footer @if (App::isLocale('ar'))  text-right  @endif">
      <div class="container">
        <div class="row">
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h5 class="mb-5">@lang('Scenic Products')</h5>
            <ul class="list-group list-unstyled @if (App::isLocale('ar'))  ar-list @endif">
              <li><i class="fas @if (App::isLocale('ar')) fa-caret-left ml-2 @else fa-caret-right mr-2 @endif"></i>@lang('Web Design') </li>
              <li><i class="fas @if (App::isLocale('ar')) fa-caret-left ml-2 @else fa-caret-right mr-2 @endif"></i>@lang('Graphic Design') </li>
              <li><i class="fas @if (App::isLocale('ar')) fa-caret-left ml-2 @else fa-caret-right mr-2 @endif"></i>@lang('Web Developers') </li>
              <li>
                <i class="fas @if (App::isLocale('ar')) fa-caret-left ml-2 @else fa-caret-right mr-2 @endif"></i>@lang('Marketing Strategy')
              </li>
            </ul>
          </div>

          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h5 class="mb-5">@lang('Company')</h5>
            <ul class="list-group list-unstyled @if (App::isLocale('ar'))  ar-list @endif">
              <li><i class="fas @if (App::isLocale('ar')) fa-caret-left ml-2 @else fa-caret-right mr-2 @endif"></i>@lang('Home') </li>
              <li><i class="fas @if (App::isLocale('ar')) fa-caret-left ml-2 @else fa-caret-right mr-2 @endif"></i>@lang('About Us') </li>
              <li><i class="fas @if (App::isLocale('ar')) fa-caret-left ml-2 @else fa-caret-right mr-2 @endif"></i>@lang('Portfolio') </li>
              <li><i class="fas @if (App::isLocale('ar')) fa-caret-left ml-2 @else fa-caret-right mr-2 @endif"></i>@lang('Contact') </li>
            </ul>
          </div>

          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h5 class="mb-5">@lang('Support')</h5>
            <ul class="list-group list-unstyled @if (App::isLocale('ar'))  ar-list @endif">
              <li><i class="fas @if (App::isLocale('ar')) fa-caret-left ml-2 @else fa-caret-right mr-2 @endif"></i>@lang('Supports') </li>
              <li><i class="fas @if (App::isLocale('ar')) fa-caret-left ml-2 @else fa-caret-right mr-2 @endif"></i>@lang('Privacy') </li>
              <li><i class="fas @if (App::isLocale('ar')) fa-caret-left ml-2 @else fa-caret-right mr-2 @endif"></i>@lang('Terms of Service') </li>
            </ul>
          </div>

          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h5 class="mb-5">@lang('Contact')</h5>
            <div class="wrapper text-center">
              <div class="icon facebook">

                <div class="tooltip">Facebook</div>
                <a href="{{ @$settings->Facebook }}" target="_blank">
                  <span><i class="fab fa-facebook-f"></i></span>
                </a>
              </div>
              <div class="icon twitter">
                <div class="tooltip">Twitter</div>
                <a href="{{ @$settings->Twitter }}" target="_blank">
                  <span><i class="fab fa-twitter"></i></span>
                </a>
              </div>
              <div class="icon instagram">
                <div class="tooltip">Instagram</div>
                <a href="{{ @$settings->Instegram }}" target="_blank">
                  <span><i class="fab fa-instagram"></i></span>
                </a>
              </div>

              <div class="icon youtube">
                <div class="tooltip">YouTube</div>
                <a href="{{ @$settings->YouTube }}" target="_blank">
                  <span><i class="fab fa-youtube"></i></span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- Start Copyright -->
        <div class="copyright text-center mt-5 lead">
          @if (!App::isLocale('ar'))
          <p>Copyright © <b>2020</b> All rights reserved | Vu Digital</p>
          @else
          <p>Copyright © <b>2020</b> جميع الحقوق محفوظة | Vu Digital</p>
          @endif
        </div>
      </div>
    </div>
  <!-- End Footer Section -->

