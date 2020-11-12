@extends('layouts.master')

@section('content')
<section class="content-header">
    <h1>
        Edit Settings
    </h1>
</section>
<div class="row">
    <div class="col-sm-12">
        @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
        @endif
    </div>
</div>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <form role="form" action="{{url('/siteAdmin/settings/edit')}}" method="post"
                    enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="form-group">
                            <label>phone</label>
                            <input name="phone" type="text" class="form-control"
                                value="{{old('phone')? old('phone'): @$settings->phone}}" required>
                            @if ($errors->has('phone'))
                            <span class="help-block">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>email</label>
                            <input name="email" type="email" class="form-control"
                                value="{{old('email')? old('email'): @$settings->email}}" required>
                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>location</label>
                            <input name="location" type="text" class="form-control"
                                value="{{old('location')? old('location'): @$settings->location}}" required>
                            @if ($errors->has('location'))
                            <span class="help-block">
                                <strong>{{ $errors->first('location') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>YouTube</label>
                            <input name="YouTube" type="text" class="form-control"
                                value="{{old('YouTube')? old('YouTube'): @$settings->YouTube}}" required>
                            @if ($errors->has('YouTube'))
                            <span class="help-block">
                                <strong>{{ $errors->first('YouTube') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Instegram</label>
                            <input name="Instegram" type="text" class="form-control"
                                value="{{old('Instegram')? old('Instegram'): @$settings->Instegram}}" required>
                            @if ($errors->has('Instegram'))
                            <span class="help-block">
                                <strong>{{ $errors->first('Instegram') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Twitter</label>
                            <input name="Twitter" type="text" class="form-control"
                                value="{{old('Twitter')? old('Twitter'): @$settings->Twitter}}" required>
                            @if ($errors->has('Twitter'))
                            <span class="help-block">
                                <strong>{{ $errors->first('Twitter') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Facebook</label>
                            <input name="Facebook" type="text" class="form-control"
                                value="{{old('Facebook')? old('Facebook'): @$settings->Facebook}}" required>
                            @if ($errors->has('Facebook'))
                            <span class="help-block">
                                <strong>{{ $errors->first('Facebook') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Logo</label>
                            <img style=" height: 128px;width: auto;border: 1px solid #ccc; padding: 2px "
                                src="{{ '/img/logo/'. @$settings->logo->name }}">
                            <input name="logo_id" class="form-control" type="file">
                        </div>


                        <!-- /.box-body -->
                        <div class="box-footer">
                            <input type="submit" value="Add" class="btn btn-primary">
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
