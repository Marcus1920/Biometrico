@extends('master')

@section('content')
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My Charts</title>

    {!! Charts::styles() !!}

</head>
<body>
<!-- Main Application (Can be VueJS or other JS framework) -->
<div class="app">
    <!-- Shortcuts -->
    <div class="block-area shortcut-area">
        <a class="shortcut tile"   href="{{ url('/selectSite')}}">
            <img src="{{ url('img/shortcuts/clock-in.png') }}" alt="Clock Listing">
            <small class="t-overflow">Clock Listing</small>
        </a>
        <a class="shortcut tile" href="{{ url('/attendance')}}">
            <img src="{{ url('img/shortcuts/attended.png') }}" alt="">
            <small class="t-overflow">Attendance List</small>
        </a>
        <a class="shortcut tile"  href="{{ url('/workshedul')}}">
            <img src="{{ url('img/shortcuts/Schedule.png') }}" alt="">
            <small class="t-overflow">Work Schedule</small>
        </a>
        {{--<a class="shortcut tile" href="">--}}
        {{--<img src="{{ url('img/shortcuts/statistic.png') }}" alt="">--}}
        {{--<small class="t-overflow">Statistics</small>--}}
        {{--</a>--}}
        {{--<a class="shortcut tile" href="">--}}
        {{--<img src="{{ url('img/shortcuts/Document.png') }}" alt="">--}}
        {{--<small class="t-overflow">Connection</small>--}}
        {{--</a>--}}
        <a class="shortcut tile" href="{{ url('/charts')}}">
        <img src="{{ url('img/shortcuts/Copy.png') }}" alt="">
        <small class="t-overflow">Reports</small>
        </a>
    </div>

    <hr class="whiter" />

    <ol class="breadcrumb hidden-xs">
        <li><a href="{{ url('/sites') }}">Sites</a></li>
        <li class="active">Clock List</li>
    </ol>
    <h4 class="page-title">Work Shedule Listing for </h4>
    <br/>
    <center>
        <div class="col-md-10 col-lg-offset-1">
        {!! $chart->html() !!}
        </div>
    </center>
</div>
<!-- End Of Main Application -->
{!! Charts::scripts() !!}
{!! $chart->script() !!}
</body>
</html>
@endsection