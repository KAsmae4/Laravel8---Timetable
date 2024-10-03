


@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">

            <div class="row">
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                    <div class="card dash-widget">
                        <div class="card-body">
                            <span class="dash-widget-icon"><i class="fas fa-user"></i></span>
                            <div class="dash-widget-info">
                                <h3>{{\App\User::count()}}</h3>
                                <span>Users</span>
                            </div>
                           
                            <a href="{{url('admin/users')}}" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                    <div class="card dash-widget">
                        <div class="card-body">
                            <span class="dash-widget-icon"><i class="fa fa-cubes"></i></span>
                            <div class="dash-widget-info">
                            <h3>{{\App\Lesson::count()}}</h3>
                                <span>Modules</span>
                            </div>
                            <a href="{{url('admin/lessons')}}" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                    <div class="card dash-widget">
                        <div class="card-body">
                            <span class="dash-widget-icon"><i class="fas fa-users"></i></span>
                            <div class="dash-widget-info">
                            <h3>{{\App\SchoolClass::count()}}</h3>
                                <span>Groupes</span>
                            </div>
                            <a href="{{url('admin/school-classes')}}" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
@section('scripts')
@parent

@endsection