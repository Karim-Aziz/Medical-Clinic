@extends('layouts.master')

@section('content')
<section class="content-header">
    <h1>
        Dashboard
        <small>Control panel</small>
    </h1>
</section>
<section class="content">
    <!-- Small boxes (Stat box) -->

    <div class="row">
        {{--

        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-fuchsia">
                <div class="inner">
                    <h3>{{App\suggestion::all()->count()}}</h3>

                    <p>suggestion</p>
                </div>
                <div class="icon">
                    <i class="ion ion-flash"></i>
                </div>
                <a href="/siteAdmin/suggestion/show" class="small-box-footer">More info <i
                        class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-orange">
                <div class="inner">
                    <h3>{{App\channel::all()->count()}}</h3>

                    <p>Videos</p>
                </div>
                <div class="icon">
                    <i class="ion ion-camera"></i>
                </div>
                <a href="/siteAdmin/channel/show" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                    </a>
            </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>{{ @count(App\home_slider::all()) }}</h3>

                    <p>Home Slider Images</p>
                </div>
                <div class="icon">
                    <i class="ion ion-images"></i>
                </div>
                <a href="/siteAdmin/home_slider/show" class="small-box-footer">
                    More info
                    <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>


         --}}
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>{{ @count(App\User::all()) }}</h3>

                    <p>User Registrations</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="{{ url('/siteAdmin/user/show')}}" class="small-box-footer">
                    More info
                    <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>{{App\services::all()->count()}}</h3>
                    <p>services</p>
                </div>
                <div class="icon">
                    <i class="ion ion-android-print"></i>
                </div>
                <a href="/siteAdmin/services/show" class="small-box-footer">More info <i
                        class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-primary">
                <div class="inner">
                    <h3>{{ @count(App\contact::all()) }}</h3>

                    <p>Contact Messages</p>
                </div>
                <div class="icon">
                    <i class="ion ion-android-drafts"></i>
                </div>
                <a href="/siteAdmin/contact" class="small-box-footer">More info <i
                        class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>{{App\places::all()->count()}}</h3>
                    <p>portfolios</p>
                </div>
                <div class="icon">
                    <i class="ion ion-chatbox-working"></i>
                </div>
                <a href="/siteAdmin/places/show" class="small-box-footer">More info <i
                        class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

    </div>

    <!-- /.row -->
    <!-- Main row -->

    <!-- /.row (main row) -->

</section>
@endsection
@section('css')
<link href="{{ url('/Ionicons/css/ionicons.min.css') }}" rel="stylesheet">
@endsection