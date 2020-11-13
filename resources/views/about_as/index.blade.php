@php
if (Session::get('app_locale') == 'ar') {
App::setLocale('ar');
} else {
App::setLocale('en');
Session::put(App::setLocale('en'));
}
@endphp
@extends('layouts.app')
@section('title','About As')
@section('content')

  <!-- =========== Start About Page =========== -->
    <div class="about-page">
      <div class="container">
        <div class="row" data-aos="zoom-in" data-aos-duration="1500">
          <div class="col-md-4">
            <div class="media mb-4">
              <i class="fas fa-user-md rounded-circle mr-4"></i>
              <div class="media-body">
                <h5 class="mt-0">Holds</h5>
                British Fellowship in Ear, Nose and Throat Diseases
              </div>
            </div>

            <div class="media mb-4">
              <i class="fas fa-book-open rounded-circle mr-4"></i>
              <div class="media-body">
                <h5 class="mt-0">Holds</h5>
                British Fellowship in Ear, Nose and Throat Diseases
              </div>
            </div>

            <div class="media mb-4">
              <i class="fas fa-calendar-alt rounded-circle mr-4"></i>
              <div class="media-body">
                <h5 class="mt-0">Holds</h5>
                British Fellowship in Ear, Nose and Throat Diseases
              </div>
            </div>
          </div>

          <div class="col-md-4 text-center">
            <img src="images/pr_doc.png" alt="" />
          </div>

          <div class="col-md-4">
            <div class="media mb-4">
              <i class="fas fa-stethoscope rounded-circle mr-4"></i>
              <div class="media-body">
                <h5 class="mt-0">Holds</h5>
                British Fellowship in Ear, Nose and Throat Diseases
              </div>
            </div>

            <div class="media mb-4">
              <i class="fas fa-user-graduate rounded-circle mr-4"></i>
              <div class="media-body">
                <h5 class="mt-0">Holds</h5>
                British Fellowship in Ear, Nose and Throat Diseases
              </div>
            </div>

            <div class="media mb-4">
              <i class="fas fa-users rounded-circle mr-4"></i>
              <div class="media-body">
                <h5 class="mt-0">Holds</h5>
                British Fellowship in Ear, Nose and Throat Diseases
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- =========== End About Page =========== -->

    <!-- =========== Start Video  =========== -->
    <div class="about">
      <div class="container">
        <div class="row" data-aos="zoom-in" data-aos-duration="1500">
          <div class="col-md-5">
            <div class="about-info">
              <h5>DR. AHMED MOHAMED</h5>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam,
                reprehenderit cum nesciunt ex quam voluptatem est dolorem
                explicabo distinctio, ullam ad architecto eaque facere error
                exercitationem dolorum beatae optio dolores.
              </p>

              <p>
                <i class="fas fa-check"></i> Scientific Skills For getting a
                better result
              </p>
              <p>
                <i class="fas fa-check"></i> Communication Skills to getting in
                touch
              </p>
              <p>
                <i class="fas fa-check"></i> A Career Overview opportunity
                Available
              </p>
              <p>
                <i class="fas fa-check"></i> A good Work Environment For work
              </p>
              <p>
                <i class="fas fa-check"></i> A good Work Environment For work
              </p>

              <button>Learn more <i class="fas fa-plus"></i></button>
            </div>
          </div>

          <div class="col-md-7">
            <div class="video">
              <iframe
                src="https://www.youtube.com/embed/tSyZVNes8qg"
                frameborder="0"
                allow="autoplay; fullscreen"
                allowfullscreen=""
              >
              </iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- =========== End Video  =========== -->
@endsection
