@extends('layouts.master')

@section('content')
<section class="content-header">
    <h1>
        Add portfolio
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
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
            <form role="form" action="{{url('/siteAdmin/places/insert')}}" method="post"
                enctype="multipart/form-data">
                     {{ csrf_field() }}
                    <div class="box-body">
                        <div class="form-group">
                            <label>url</label>
                            <input id="url" type="text" class="form-control" name="url" value="{{ old('url') }}"
                                required autofocus>

                            @if ($errors->has('url'))
                            <span class="help-block">
                                <strong>{{ $errors->first('url') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="page_id">Page</label>
                              <select class="form-control" name="page_id" id="page_id">
                                @foreach (App\pages::all() as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                              </select>
                            @if ($errors->has('page_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('page_id') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Photo</label>
                            <input name="img" class="form-control" type="file">
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <input type="submit" value="Add" class="btn btn-primary" >
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
