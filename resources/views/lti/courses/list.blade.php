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
            <?php $count = 0; ?>
            @foreach($courses as $course)
                <div class="col-xs-18 col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <div class="caption">
                            <h4>{!! $course['title'] !!}</h4><br />
                            <p>{!! $course['description'] !!}</p>
                        </div>
                        <div class="pull-bottom-left">
                            <p><a href="{{ route('lti.courses.single', $course['id']) }}" class="btn btn-success btn-xs" role="button">View</a></p>
                        </div>
                    </div>
                </div>
            @endforeach
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