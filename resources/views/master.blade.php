<!DOCTYPE html>
<!--[if IE 9 ]>
![endif]-->
<html class="ie9">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta name="format-detection" content="telephone=no">
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="icon" type="image/x-icon" sizes="16x16" href="{{ asset('img/Biometrico-Logo-Final.jpg') }}">


    <title>Biometrico</title>


    <!-- CSS -->
    <link href="{{ asset('css/token-input.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
    <link href="{{ asset('css/calendar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/generics.css') }}" rel="stylesheet">
    <link href="{{ asset('css/token-input.css') }}" rel="stylesheet">
    <link href="{{ asset('css/icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lightbox.css') }}" rel="stylesheet">
    <link href="{{ asset('css/media-player.css') }}" rel="stylesheet">
    <link href="{{ asset('css/file-manager.css') }}" rel="stylesheet">
    <link href="{{ asset('css/buttons.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/HoldOn.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-switch.min.css') }}" rel="stylesheet">
    <link href="{{ asset('incl/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Treant.css') }}" rel="stylesheet">
    <link href="{{ asset('css/collapsable.css') }}" rel="stylesheet">
    <link href="{{ asset('css/calendar.css') }}" rel="stylesheet">
    <link href="css/calendar.css" rel="stylesheet">
    <link href="{{ asset('css/toggles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/toggle-themes/toggles-all.css') }}" rel="stylesheet">

    <link href="{{ asset('css/toggles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/toggle-themes/toggles-all.css') }}" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="{{ asset('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') }}" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
{{--<link href="{{ asset('public/bower_components/datatables-responsive/css/responsive.dataTables.scss') }}" rel="stylesheet">--}}
<!-- jQuery Library -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <!-- jQuery Library -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>





    <!-- DataTables CSS -->
    <link href="{{ asset('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') }}" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="{{ asset('bower_components/datatables-responsive/css/responsive.dataTables.scss') }}" rel="stylesheet">



    <script>


        var placeSearch, autocomplete;
        var componentForm = {
            street_number: 'short_name',
            route: 'long_name',
            locality: 'long_name',
            administrative_area_level_1: 'short_name',
            country: 'long_name',
            postal_code: 'short_name'
        };

    </script>

    <style>
        body {
            width: 100%;
            height:100%;
            font-family: 'Open Sans', sans-serif;
            background: #092756;
            background: -moz-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%),-moz-linear-gradient(top,  rgba(57,173,219,.25) 0%, rgba(42,60,87,.4) 100%), -moz-linear-gradient(-45deg,  #670d10 0%, #092756 100%);
            background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -webkit-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -webkit-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
            background: -o-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -o-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -o-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
            background: -ms-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -ms-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -ms-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
            background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), linear-gradient(to bottom,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), linear-gradient(135deg,  #670d10 0%,#092756 100%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3E1D6D', endColorstr='#092756',GradientType=1 );
        }
    </style>

</head>

<?php

        use App\User;
        use App\role;
        use App\Site;

        $user = User::where('id',Auth::user()->id )->with('company')->first();

        $role = role::where('id',$user->role)->first();

        $sites = Site::with('company')->where('company_id',$user->company_id)
            ->orderBy('id','DESC')
            ->take(5)
            ->get();

?>

<body>

<header id="header" class="media">
    <a href="" id="menu-toggle"></a>
    <a class="logo pull-left" href="#">
        {{--<img class="" src="{{ asset('/img/Biometrico-Logo-Final.png') }}" width="60%" alt="">--}}
    </a>

    <div class="media-body">
        <div class="media" id="top-menu">

            <div id="home">

                {{-- <div class="pull-left tm-icon">
                      <a data-drawer="messages" class="drawer-toggle">
                          <i class="fa fa-envelope-o fa-2x"></i>
                          <i class="n-count animated" id='countPrivateMessages'>{{ count($noPrivateMessages,0) }}</i>

                      </a>
                  </div>--}}

                <div class="pull-left tm-icon">

                    <a href="" data-toggle="modal" onClick="launchAddress();" data-target=".modalAddress" >
                    </a>
                </div>

            </div>



            <div id="time" class="pull-right">
                <span id="hours"></span>
                :
                <span id="min"></span>
                :
                <span id="sec"></span>
            </div>
        </div>
    </div>
</header>

<div class="clearfix"></div>

<section id="main" class="p-relative" role="main">

    <!-- Sidebar -->
    <aside id="sidebar">

        <!-- Sidbar Widgets -->
        <div class="side-widgets overflow" style="position: relative;">
            <!-- Profile Menu -->
            <div class="text-center s-widget m-b-25 dropdown" id="profile-menu">
                <a href="#" data-toggle="dropdown">
                    <img class="profile-pic animated" src="{{ asset('/img/Biometrico-Logo-Final.jpg') }}" alt="Biometrico">
                </a>

                <ul class="profile-menu">
                    {{--<li><a href="{{ url('all-messages') }}">Messages</a> <i class="icon left">&#61903;</i><i class="icon right">&#61815;</i></li>--}}
                    {{--<li><a href="{{ url('user-profile') }}">Profile</a> <i class="icon left">&#61903;</i><i class="icon right">&#61815;</i></li>--}}

                </ul>


                @if (Auth::user())
                    <h4 class="m-0">
                        {{ Auth::user()->name }}  {{ Auth::user()->surname }}
                    </h4><br>
                    {{ Auth::user()->email }}<br>
                    {{ $role->name }}<br>
                    of<br>
                    {{$user->company->name}}




{{--                    {{$user}}--}}

                @endif
                <span style="margin-top:20px"></span>
                <br/>
                <br/>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <h4 class="glyphicon glyphicon-log-out">Logout</h4>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                <br/>
                <br/>

                <!-- Calendar -->
                <div class="s-widget m-b-25">
                    <div id="sidebar-calendar"></div>
                </div>

                <div class="tile">
                    <h5 class="glyphicon glyphicon-credit-card"> Sites</h5>
                    <h2 class="tile-title">
                    </h2>

                <ol class="rounded-list">
                    @foreach($sites as $site)
                    <li><a href="{{ url('/selectSite',$site->id)}}">{{$site->site_name}}</a></li>
                    @endforeach
                    {{--<li><a href="">List item</a></li>--}}
                    {{--<li><a href="">List item</a></li>--}}
                    {{--<li><a href="">List item</a></li>--}}
                </ol>

                    <div class="media text-center whiter l-100">

                    </div>

{{--                    {{$sites}}--}}

                </div>

            </div>


            </div>


        @if (Request::is('message-detail/*') || Request::is('all-messages'))
            @include('messages.message-widget')
        @endif

        <!-- Calendar -->
            <div class="s-widget m-b-25">
                <div id="landings_calendar"></div>
            </div>

            {{--<img class="" src="{{ asset('public/images/dashboard_logo.png') }}" width="60%" alt="" style=" position: absolute; left: 25px; bottom: 10px;">--}}
        </div>

        <!-- Side Menu -->
        <ul class="list-unstyled side-menu">

            <li {{ (Request::is('list-users') ? "class=active dropdown" : 'dropdown') }}>

                <a class="sa-side-ui"href="#">
                    <span class="menu-item">Settings</span>
                </a>
                <ul class="list-unstyled menu-item">
                    <li><a href="{{ url('registerUser') }}"><span class="badge badge-r"></span>Register</a></li>
                    <li><a href="{{ url('usersList') }}"><span class="badge badge-r"></span>User List</a></li>
                    <li><a href="{{ url('companyList') }}"><span class="badge badge-r"></span>Company List</a></li>
                    <li><a href="{{ url('rolesList') }}"><span class="badge badge-r"></span>Roles List</a></li>
                    <li><a href="{{ url('addsite') }}"><span class="badge badge-r"></span>Add Site </a></li>
                    {{--<li><a href="{{ url('userroleslist')}}"><span class="badge badge-r"></span>User Roles List</a></li>--}}

                </ul>
            </li>

            {{--<li {{ (Request::is('') ? "class=active dropdown" : 'dropdown') }}>--}}

                {{--<a class="sa-side-user" href="#">--}}
                    {{--<span class="menu-item">App Users</span>--}}
                {{--</a>--}}
                {{--<ul class="list-unstyled menu-item">--}}
                    {{--<h6><b>APP USERS</b></h6>--}}
                    {{--<li><a href="{{ url('inactiveUsers') }}"><span class="badge badge-r"></span>Inactive Users</a></li>--}}
                    {{--<li><a href="{{ url('activeUsers') }}"><span class="badge badge-r"></span>Active Users</a></li>--}}
                    {{--<li><a href="{{ url('deactivatedUser') }}"><span class="badge badge-r"></span>Deactivated Users</a></li>--}}
                {{--</ul>--}}

            {{--</li>--}}

            {{--<li {{ (Request::is('map') ? "class=active" : '') }}>--}}
            {{--<a class="sa-side-home" href="{{ url('getUsers') }}">--}}
            {{--<span class="menu-item">map</span>--}}
            {{--</a>--}}
            {{--</li>--}}

            {{--<li {{ (Request::is('posts') ? "class=active" : '') }}>--}}

                {{--<a class="sa-side-cloking" href="{{ url('clockinglist') }}">--}}
                    {{--<span class="menu-item">Clocking Time Print</span>--}}

                {{--</a>--}}
            {{--</li>--}}

            {{--<li {{ (Request::is('posts') ? "class=active" : '') }}>--}}
                {{--<a class="sa-side-attendace" href="{{ url('attendance') }}">--}}
                    {{--<span class="menu-item">Attendance List</span>--}}

                {{--</a>--}}

            {{--</li>--}}


            {{--<li {{ (Request::is('research') ? "class=active" : '') }}>--}}

                {{--<a class="sa-side-workshedule" href="{{ url('workshedul') }}">--}}
                    {{--<span class="menu-item">work schedule </span>--}}

                {{--</a>--}}

            {{--</li>--}}

            {{--<li {{ (Request::is('public_wall') ? "class=active" : '') }}>--}}
            {{--<a class="sa-side-public_wall" href="{{ url('publicWall') }}">--}}
            {{--<span class="menu-item">Public Wall</span>--}}

            {{--</a>--}}
            {{--</li>--}}

            {{--<li {{ (Request::is('reports') ? "class=active" : '') }}>--}}
       {{--<a class="sa-side-reports" href="{{ url('reports') }}">--}}
                    {{--<span class="menu-item">Reports</span>--}}

                {{--</a>--}}

            {{--</li>--}}

            {{--<li {{ (Request::is('transaction') ? "class=active" : '') }}>--}}
            {{--<a class="sa-side-transaction" href="{{ url('transactionList') }}">--}}
            {{--<span class="menu-item">Transaction history</span>--}}
            {{--</a>--}}
            {{--</li>--}}

        </ul>

    </aside>


    <!-- Content -->
    <section id="content" class="container">

        @yield('content')
    </section>
</section>
@yield('footer')


<script src="{{ asset('js/toggles.js') }}"></script>

<script src="{{ asset('js/jquery-ui.min.js') }}"></script> <!-- jQuery UI -->
<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script> <!-- jQuery Easing - Requirred for Lightbox + Pie Charts-->

<script src="{{ asset('js/toggles.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/paginationjs/2.1.0/pagination.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/paginationjs/2.1.0/pagination.min.js"></script>
{{--<script src="{{ asset('js/pagination.js') }}"></script>--}}
{{--<script src="{{ asset('js/pagination.min.js') }}"></script>--}}
<script src="{{ asset('js/jquery-ui.min.js') }}"></script> <!--


jQuery UI -->
<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script> <!-- jQuery Easing - Requirred for Lightbox + Pie Charts-->


<!-- Bootstrap -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!--  Form Related -->
<script src="{{ asset('js/icheck.js') }}"></script> <!-- Custom Checkbox + Radio -->

<!-- UX -->
<script src="{{ asset('js/scroll.min.js') }}"></script> <!-- Custom Scrollbar -->

<!-- Other -->
<script src="{{ asset('js/calendar.min.js') }}"></script> <!-- Calendar -->
<script src="{{ asset('js/feeds.min.js') }}"></script> <!-- News Feeds -->


<!--  Form Related -->
<script src="{{ asset('js/validation/validate.min.js') }}"></script> <!-- jQuery Form Validation Library -->
<script src="{{ asset('js/validation/validationEngine.min.js') }}"></script> <!-- jQuery Form Validation Library - requirred with above js -->


<!-- All JS functions -->
<script src="{{ asset('js/functions.js') }}"></script>


<!-- Token Input -->
<script src="{{ asset('js/jquery.tokeninput.js') }}"></script> <!-- Token Input -->



<!-- Noty JavaScript -->
<script src="{{ asset('bower_components/noty/js/noty/packaged/jquery.noty.packaged.js') }}"></script>

<!-- DataTables JavaScript -->


<script src="{{ asset('bower_components/datatables/media/js/datatables-plugins/pagination/scrolling.js') }}"></script>
<script src="{{ asset('bower_components/datatables/media/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js') }}"></script>



<!-- Jquery Bootstrap Maxlength -->
<script src="{{ asset('bower_components/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>


<!-- Media -->
<script src="{{ asset('js/media-player.min.js') }}"></script> <!-- Video Player -->
<script src="{{ asset('js/pirobox.min.js') }}"></script> <!-- Lightbox -->
<script src="{{ asset('js/file-manager/elfinder.js') }}"></script> <!-- File Manager -->


<script type="text/javascript" src="{{ asset('incl/oms.min.js') }}"></script>



<!-- File Upload -->
<script src="{{ asset('js/fileupload.min.js') }}"></script> <!-- File Upload -->

<!-- Spinner -->
<script src="{{ asset('js/HoldOn.min.js') }}"></script> <!-- Spinner -->

<!-- bootstrap-switch. -->
<script src="{{ asset('js/bootstrap-switch.js') }}"></script> <!-- bootstrap-switch. -->

<!-- Date & Time Picker -->
<script src="{{ asset('js/datetimepicker.min.js') }}"></script> <!-- Date & Time Picker -->

<!-- Buttons HTML5 -->
<script src="{{ asset('js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('js/jszip.min.js') }}"></script>
<script src="{{ asset('js/pdfmake.min.js') }}"></script>
<script src="{{ asset('js/vfs_fonts.js') }}"></script>
<!--  Buttons HTML5 -->

<script src="{{ asset('js/socket.io.js') }}"></script>

<script src="{{ asset('js/calendar.min.js') }}"></script> <!-- Calendar -->

<script src="{{ asset('js/raphael.js') }}"> </script>


<!-- Charts -->
<script src="js/charts/jquery.flot.js"></script> <!-- Flot Main -->
<script src="js/charts/jquery.flot.time.js"></script> <!-- Flot sub -->
<script src="js/charts/jquery.flot.animator.min.js"></script> <!-- Flot sub -->
<script src="js/charts/jquery.flot.resize.min.js"></script> <!-- Flot sub - for repaint when resizing the screen -->

<script src="js/sparkline.min.js"></script> <!-- Sparkline - Tiny charts -->
<script src="js/easypiechart.js"></script> <!-- EasyPieChart - Animated Pie Charts -->
<script src="js/charts.js"></script> <!-- All the above chart related functions -->

<!-- Other -->
<script src="js/calendar.min.js"></script> <!-- Calendar -->
<script src="js/feeds.min.js"></script> <!-- News Feeds -->


<!-- All JS functions -->
<script src="js/functions.js"></script>
<!-- D3.js
        <script src="{{ asset('js/d3/plugins.js') }}"></script>
        <script src="{{ asset('js/d3/script.js') }}"></script>
        <script src="{{ asset('js/d3/libs/coffee-script.js') }}"></script>
        <script src="{{ asset('js/d3/libs/d3.v2.js') }}"></script>
        <script src="{{ asset('js/d3/Tooltip.js') }}"></script>
        <script src="{{ asset('js/d3/Tooltip.js') }}"></script>
    -->

<script>
    $("#country").tokenInput("{!! url('/getCountries')!!}",
        {tokenLimit: 1,
            animateDropdown: false,
            onAdd: function (results) {

                if(results.name)
                {
                    $("#code").val(results.dial_code);
                }
                else
                {

                }
                return results;
            },
        });



</script>

</body>
</html>