@extends('layouts.master')

@section('content')
<section class="content-header">
    <h1>
        about_as
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
                    @if ($about_as->count() > 0)
                    @foreach ($about_as as $service)
                    <div class="modal fade" id="modal-default{{$service->id}}" style="display: none;">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span></button>
                                    <h4 class="modal-title">Edit About As </h4>
                                </div>


                                <div class="modal-body">
                                    <form role="form" action="{{url('/siteAdmin/about_us/edit/'.$service->id)}}"
                                        method="post" >

                                        {{ csrf_field() }}
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label>about company</label>
                                                <textarea id="about_company" class="form-control ckeditor" name="about_company" required>{{old('about_company')? old('about_company'): $service->about_company}}</textarea>
                                                @if ($errors->has('about_company'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('about_company') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label>about company ar</label>
                                                <textarea id="about_company_ar" class="form-control ckeditor" name="about_company_ar"
                                                    required>{{old('about_company_ar')? old('about_company_ar'): $service->about_company_ar}}</textarea>
                                                @if ($errors->has('about_company_ar'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('about_company_ar') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label>mission</label>
                                                <textarea id="mission" class="form-control ckeditor" name="mission"
                                                    required>{{old('mission')? old('mission'): $service->mission}}</textarea>
                                                @if ($errors->has('mission'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('mission') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label>mission ar</label>
                                                <textarea id="mission_ar" class="form-control ckeditor" name="mission_ar" required>{{old('mission_ar')? old('mission_ar'): $service->mission_ar}}</textarea>
                                                @if ($errors->has('mission_ar'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('mission_ar') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label>vission</label>
                                                <textarea id="vission" class="form-control ckeditor" name="vission"
                                                    required>{{old('vission')? old('vission'): $service->vission}}</textarea>
                                                @if ($errors->has('vission'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('vission') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label>vission_ar</label>
                                                <textarea id="vission_ar" class="form-control ckeditor" name="vission_ar" required>{{old('vission_ar')? old('vission_ar'): $service->vission_ar}}</textarea>
                                                @if ($errors->has('vission_ar'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('vission_ar') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            
                                            <div class="box-footer">
                                                <input type="submit" value="update" class="btn btn-primary">
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
                                                
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1"
                                                    aria-label="service1: activate to sort column ascending">
                                                    about company
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1"
                                                    aria-label="service1_ar: activate to sort column ascending">
                                                    mission
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1"
                                                    aria-label="service2: activate to sort column ascending">
                                                    vission
                                                </th>
                                                

                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="Actions: activate to sort column ascending">
                                                    Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($about_as->count() > 0)
                                            @foreach ($about_as as $service)
                                            <tr role="row" class="odd">
                                                <td>{!! $service->about_company !!}</td>
                                                <td>{!! $service->mission !!}</td>
                                                <td>{!! $service->vission !!}</td>
                                                
                                                <td>
                                                    <a data-toggle="modal"
                                                        data-target="#modal-default{{$service->id}}"
                                                        class="btn btn-success" title="edit" style="margin-bottom: 3px">
                                                        <i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i>
                                                    </a>
                                                    {{-- 
                                                <a href="{{url('/siteAdmin/service/delete/'. $service->id)}}"
                                                    class="btn btn-danger confirm" title="delete" style="margin-bottom:
                                                    3px">
                                                    <i class="fa fa-trash fa-fw" aria-hidden="true"></i>
                                                    </a>
                                                    --}}
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