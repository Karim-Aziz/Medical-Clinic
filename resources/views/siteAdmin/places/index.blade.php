@extends('layouts.master')

@section('content')
<section class="content-header">
    <h1>
        Our Services
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
        <div class="col-xs-12">
            <div class="box">
                <!-- /.box-header -->
                <div class="box-body">
                    @if ($places->count() > 0)
                        @foreach ($places as $place)
                            <div class="modal fade" id="modal-default{{$place->id}}" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span></button>
                                            <h4 class="modal-title">Edit Service </h4>
                                        </div>


                                        <div class="modal-body">
                                        <form role="form" action="{{url('/siteAdmin/places/edit/'.$place->id)}}" method="post" enctype="multipart/form-data">

                                            {{ csrf_field() }}
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label>title</label>
                                                    <input name="title" type="text" class="form-control"
                                                        value="{{old('title')? old('title'): $place->title}}">
                                                        @if ($errors->has('title'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('title') }}</strong>
                                                        </span>
                                                        @endif
                                                </div>
                                                <div class="form-group">
                                                    <label>title_ar</label>
                                                    <input name="title_ar" type="text" class="form-control"
                                                        value="{{old('title_ar')? old('title_ar'): $place->title_ar}}">
                                                        @if ($errors->has('title_ar'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('title_ar') }}</strong>
                                                        </span>
                                                        @endif
                                                </div>

                                                <div class="form-group">
                                                    <label for="page_id">Page</label>
                                                    <select class="form-control" name="page_id"
                                                        id="page_id">
                                                        @foreach (App\pages::all() as $category)
                                                        @if (old('page_id'))
                                                           <option value="{{$category->id}}"
                                                            {{$category->id == old('page_id')}}}>
                                                            {{$category->name}}</option>
                                                        @else
                                                            <option value="{{$category->id}}"
                                                            {{$category->id == $place->page_id ? 'selected' : '' }}>
                                                            {{$category->name}}</option>
                                                        @endif

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
                                                    <img style="height: 100px;"
                                                        src="{{ @$place->image->name ? '/img/places_images/'.$place->image->name : url('/dist/img/user2-160x160.jpg')}}">
                                                    <input name="img" class="form-control" type="file">
                                                </div>
                                                 <div class="form-group">
                                                    <label>Description</label>
                                                    <textarea id="desc" class="form-control ckeditor" name="desc"
                                                        required>{{old('desc')? old('desc'): $place->desc}}</textarea>
                                                    @if ($errors->has('desc'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('desc') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <label>Description Arbic</label>
                                                    <textarea id="desc_ar" class="form-control ckeditor" name="desc_ar"
                                                        required>{{old('desc_ar')? old('desc_ar'): $place->desc_ar}}</textarea>
                                                    @if ($errors->has('desc_ar'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('desc_ar') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                                <div class="box-footer">
                                                    <input type="submit" value="update" class="btn btn-primary" >
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default pull-left"
                                                    data-dismiss="modal">Close</button>
                                            </div>
                                            </form>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->
                            </div>
                        @endforeach
                    @endif

                    <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-hover dataTable no-footer"
                                    role="grid" aria-describedby="example1_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1"  aria-sort="ascending"
                                                aria-label="title: activate to sort column descending">title</th>


                                            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-sort="ascending"
                                                aria-label="User: activate to sort column
                                                descending">page</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="Date: activate to sort column ascending">
                                                    Date
                                                </th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1"
                                                aria-label="Actions: activate to sort column ascending">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($places->count() > 0)
                                        @foreach ($places as $place)
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">{{$place->title}}</td>

                                            <td>{{ @$place->page->name}}</td>
                                            <td>{{$place->created_at->toDateString()}}</td>
                                            <td>
                                                <a data-toggle="modal" data-target="#modal-default{{$place->id}}" class="btn btn-success" title="edit" style="margin-bottom: 3px">
                                                    <i class="fa fa-pencil-square-o fa-fw"  aria-hidden="true"></i>
                                                </a>
                                                <a href="{{url('/siteAdmin/places/delete/'. $place->id)}}"
                                                    class="btn btn-danger confirm" title="delete" style="margin-bottom: 3px">
                                                    <i class="fa fa-trash fa-fw" aria-hidden="true"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>

                                </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
@endsection
@section('js')
<script src="{{ url('/ckeditor/ckeditor.js') }}"></script>
<script type="application/javascript">
    $(document).ready(function () {
        CKEDITOR.config.contentsLangDirection = 'rtl';
    });
</script>
@endsection
