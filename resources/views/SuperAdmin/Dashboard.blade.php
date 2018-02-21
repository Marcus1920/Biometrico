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
    <link rel="icon" type="image/x-icon" sizes="16x16" href="{{ asset('img/BIOCLOUD.png') }}">


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
    <link href="{{ asset('css/toggles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/toggle-themes/toggles-all.css') }}" rel="stylesheet">

    <link href="{{ asset('css/toggles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/toggle-themes/toggles-all.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.8.6/sweetalert2.min.css" rel="stylesheet">

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
            {{--background-image: url("{{$company->color}}");--}}
            {{--background-repeat: no-repeat;--}}
            {{--background-size: cover;--}}
            background: #092756;
            background: -moz-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%),-moz-linear-gradient(top,  rgba(57,173,219,.25) 0%, rgba(42,60,87,.4) 100%), -moz-linear-gradient(-45deg,  #670d10 0%, #092756 100%);
            background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -webkit-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -webkit-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
            background: -o-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -o-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -o-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
            background: -ms-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -ms-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -ms-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
            background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), linear-gradient(to bottom,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), linear-gradient(135deg,  #670d10 0%,#092756 100%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3E1D6D', endColorstr='#092756',GradientType=1 );
        }

        .swal-modal {
            background-color:red;
            border: 3px solid white;
            text-decoration-color: white;
        }
    </style>

</head>
<body>


<div class="col-md-12" style="margin-top: 3%;">

    <!-- Breadcrumb -->
    <ol class="breadcrumb hidden-xs">
        <li>

            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                Logout /
            </a>

        </li>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
        <li class="active">Dashboard for Super Admin</li>
    </ol>

    <h1 class="page-title">DASHBOARD FOR SUPER ADMIN : {{$user->name}} {{$user->surname}}</h1>

    <!-- Shortcuts -->
    {{--<div class="block-area shortcut-area">--}}
    {{--<a class="shortcut tile" href="">--}}
    {{--<img src="img/shortcuts/money.png" alt="">--}}
    {{--<small class="t-overflow">Purchases</small>--}}
    {{--</a>--}}
    {{--<a class="shortcut tile" href="">--}}
    {{--<img src="img/shortcuts/twitter.png" alt="">--}}
    {{--<small class="t-overflow">Tweets</small>--}}
    {{--</a>--}}
    {{--<a class="shortcut tile" href="">--}}
    {{--<img src="img/shortcuts/calendar.png" alt="">--}}
    {{--<small class="t-overflow">Calendar</small>--}}
    {{--</a>--}}
    {{--<a class="shortcut tile" href="">--}}
    {{--<img src="img/shortcuts/stats.png" alt="">--}}
    {{--<small class="t-overflow">Statistics</small>--}}
    {{--</a>--}}
    {{--<a class="shortcut tile" href="">--}}
    {{--<img src="img/shortcuts/connections.png" alt="">--}}
    {{--<small class="t-overflow">Connection</small>--}}
    {{--</a>--}}
    {{--<a class="shortcut tile" href="">--}}
    {{--<img src="img/shortcuts/reports.png" alt="">--}}
    {{--<small class="t-overflow">Reports</small>--}}
    {{--</a>--}}
    {{--</div>--}}

    <hr class="whiter" />

    <!-- Quick Stats -->
    <div class="block-area">
        <div class="row">

            <div class="col-md-3 col-xs-6">
                <div class="tile quick-stats media">
                    <div id="stats-line-4" class="pull-left"></div>
                    <div class="media-body">
                        <h2 data-value={{ count($company,0) }}>0</h2>
                        <small>Companies</small>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-xs-6">
                <div class="tile quick-stats media">
                    <div id="stats-line-3" class="pull-left"></div>
                    <div class="media-body">
                        <h2 data-value={{ count($sites,0) }}>0</h2>
                        <small>Sites</small>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-xs-6">
                <div class="tile quick-stats media">
                    <div id="stats-line" class="pull-left"></div>
                    <div class="media-body">
                        {{--<h2 data-value={{ count($installer,0) }}>0</h2>--}}
                        <small>Installer</small>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-xs-6">
                <div class="tile quick-stats">
                    <div id="stats-line-2" class="pull-left"></div>
                    <div class="data">
                        {{--<h2 data-value={{ count($sites,0) }}>0</h2>--}}
                        <small>Sites</small>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <hr class="whiter" />

    <!-- Main Widgets -->

    <div class="row" style="margin-left: 1%;margin-right: 1%;">
        <div class="col-md-3">
            <h4 class="page-title">Company  Listing</h4>
            <div class="tab-pane" id="closure">
                <!-- Responsive Table -->
                <div class="block-area" id="responsiveTable">
                    <div class="table-responsive">
                        <h3 class="block-title">Company</h3>
                        <a href="{{ url('CreateCompany') }}" class="btn btn-sm">
                            <i class="fa fa-plus" aria-hidden="true" title="Add new company" data-toggle="tooltip"></i>
                        </a>
                        <table class="table tile table-striped" id="CompanyTable">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>View</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <h4 class="page-title">Sites Listing</h4>
            <div class="tab-pane" id="closure">
                <!-- Responsive Table -->
                <div class="block-area" id="responsiveTable">
                    <div class="table-responsive">
                        <h3 class="block-title">Sites</h3>
                        <a href="{{ url('CreateCompany') }}" class="btn btn-sm">
                            <i class="fa fa-plus" aria-hidden="true" title="Add new company" data-toggle="tooltip"></i>
                        </a>
                        <table class="table tile table-striped" id="SitesTable">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Company</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-3">
            <h4 class="page-title">Company  Listing</h4>

        </div>

        <div class="col-md-3">
            <h4 class="page-title">Company  Listing</h4>

        </div>

    </div>

    <!-- Chat -->
</div>

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


<script src="{{ asset('js/calendar.min.js') }}"></script> <!-- Calendar -->
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
<script src="{{ asset('js/sweetalert.min.js') }}"> </script>

<!-- Charts -->
<script src="js/charts/jquery.flot.js"></script> <!-- Flot Main -->
<script src="js/charts/jquery.flot.time.js"></script> <!-- Flot sub -->
<script src="js/charts/jquery.flot.animator.min.js"></script> <!-- Flot sub -->
<script src="js/charts/jquery.flot.resize.min.js"></script> <!-- Flot sub - for repaint when resizing the screen -->

<script src="js/sparkline.min.js"></script> <!-- Sparkline - Tiny charts -->
<script src="js/easypiechart.js"></script> <!-- EasyPieChart - Animated Pie Charts -->
<script src="js/charts.js"></script> <!-- All the above chart related functions -->


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

<script>
    jQuery(document).ready(function($){

        $.ajax({
            url: '{!! url('/companies/')!!}',
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                assignToEventsColumns(data);
            }
        });

        function assignToEventsColumns(data) {
            var table = $('#CompanyTable').dataTable({
                "dom": 'Bfrtip',
                "scrollX": true,
                "bAutoWidth": false,
                "aaData": data,
                "aaSorting": [],
                "buttons": [
                    'copyHtml5',
                    'excelHtml5',
                    ,{
                        extend : 'pdfHtml5',
                        title  : 'Biometrico',
                        header : 'I am text in',
                    },
                ],
                "buttons": [
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5'
                ],
                "columns": [
                    //                    {data: 'id', name: 'id'},
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},


                    {data: function(d)

                        {
                            return "<a href='{!! url('editCompany/" + d.id + "') !!}' class='btn btn-sm glyphicon glyphicon-edit'>" + ' Edit' + "</a>";
                        },"name" : 'name'},



                ],

                "aoColumnDefs": [
                    {
                        "aTargets": [1],
                        "bSearchable": true,
                        "bSortable": false,
                        "bSort": false,
                        "mData": "EventTypeId",

                    },
                    {
                        "aTargets": [1],
                        "mData": "EventType"
                    }
                ]
            });
        }

        var $sites = {!! $sites !!};

        {{--$.ajax({--}}
        {{--url: '{!! url('/getattendanceList/')!!}',--}}
        {{--type: 'GET',--}}
        {{--dataType: 'json',--}}
        {{--success: function (data) {--}}
        {{--assignToEventsColumns(data);--}}
        {{--}--}}
        {{--});--}}

        assignToSitesColumns($sites);

        function assignToSitesColumns(data) {
            var table = $('#SitesTable').dataTable({
                "dom": 'Bfrtip',
                "scrollX": true,
                "bAutoWidth": false,
                "aaData": data,
                "aaSorting": [],
                "buttons": [
                    'copyHtml5',
                    'excelHtml5',
                    ,{
                        extend : 'pdfHtml5',
                        title  : 'Biometrico',
                        header : 'I am text in',
                    },
                ],
                "buttons": [
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5'
                ],
                "columns": [
                    //                    {data: 'id', name: 'id'},
                    {data: 'id', name: 'id'},
                    {data: 'site_name', name: 'site_name'},
                    {data: 'company.name', name: 'company.name'},
                ],

                "aoColumnDefs": [
                    {
                        "aTargets": [0],
                        "bSearchable": false,
                        "bSortable": false,
                        "bSort": false,
                        "mData": "EventTypeId",

                    },
                    {
                        "aTargets": [1],
                        "mData": "EventType"
                    }
                ]
            });
        }


    });
</script>

</body>