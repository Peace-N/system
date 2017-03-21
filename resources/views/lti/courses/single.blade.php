@extends('layouts.lti')

@section('site-title')
    Courses
@endsection

@section('custom-styles')

@endsection

@section('body-class')

@endsection

@section('user-image')
    /dist/img/user3-128x128.jpg
@endsection

@section('mini-logo-title')
    Courses
@endsection

@section('logo-title')
    Courses
@endsection

@section('page-title')
    Courses
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="panel">
                    <div class="list-group">
                        <a href="{{ route('lti.courses.single.lectures', $course['id']) }}" class="list-group-item">Go to lectures</a>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="panel">
                    <div class="pane-heading">
                        <h4 class="">{{ $course['title'] }}</h4>
                    </div>
                    <div class="panel-body">
                        <p>{!! $course['description'] !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom-scripts')
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="plugins/chartjs/Chart.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard2.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
@endsection