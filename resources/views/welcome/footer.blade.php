  @php
  $settings = App\settings::first();
  @endphp
<!-- =========== Start Footer  =========== -->
    <div class="footer @if (App::isLocale('ar'))  text-right  @endif">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <img class="mb-5" src="images/logo-footer.png" alt="logo footer" />
            @if (App::isLocale('ar'))
              {!! @$settings->footer_text_ar !!}
            @else
              {!! @$settings->footer_text !!}
            @endif
          </div>

          <div class="col-md-3">
            <h5 class="mb-5"> @lang('Dr. services')</h5>
            <ul class="list-group list-unstyled">
              @if (count($pages) > 0)
                  @foreach ($pages as $page)
                    <li>
                      @if (App::isLocale('ar'))
                        <a href="{{url('/pages/'.@$page->id)}}"> <i class="fas fa-link"></i> {{ @$page->name_ar }}</a>
                      @else
                        <a href="{{url('/pages/'.@$page->id)}}"> <i class="fas fa-link"></i> {{ @$page->name }}</a>
                      @endif
                    </li>
                  @endforeach
              @endif

            </ul>
          </div>

          <div class="col-md">
            <h5 class="mb-5">@lang('Important links')</h5>
            <ul class="list-group list-unstyled">
              <li>
                <a href="{{ url('/about_us') }}"> <i class="fas fa-link"></i> @lang('About Doctor')  </a>
              </li>
              <li>
                <a href="#"> <i class="fas fa-link"></i> @lang('Service')  </a>
              </li>
              <li>
                <a href="#"> <i class="fas fa-link"></i> @lang('Article')  </a>
              </li>
              <li>
                <a href="{{ url('/contact') }}"> <i class="fas fa-link"></i> @lang('Contact Us') </a>
              </li>
            </ul>
          </div>

          <div class="col-md">
            <h5 class="mb-5">@lang('Contact Us')</h5>
            <div class="footer-icon">
              <a href="{{ @$settings->Facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
              <a href="{{ @$settings->Twitter }}" target="_blank"><i class="fab fa-twitter"></i></a>
              <a href="{{ @$settings->YouTube }}" target="_blank"><i class="fab fa-youtube"></i></a>
              <a href="{{ @$settings->Instegram }}" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>

            <ul class="list-group list-unstyled">
              <li>
                <a href="#">
                  <i class="fas fa-phone-alt mr-2"></i>{{ @$settings->phone }}
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fas fa-mail-bulk mr-2"></i>{{ @$settings->email }}
                </a>
              </li>
            </ul>
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
    <!-- =========== End Footer  =========== -->

