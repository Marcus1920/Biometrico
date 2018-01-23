@extends('master')

@section('content')
<div class="login">

    <!-- Breadcrumb -->
    <ol class="breadcrumb hidden-xs">
        <li><a href="#">Home</a></li>
        <li><a href="#">Library</a></li>
        <li class="active">Data</li>
    </ol>

    <h4 class="page-title">DASHBOARD</h4>

    <!-- Shortcuts -->
    <div class="block-area shortcut-area">
        <a class="shortcut tile" href="">
            <img src="img/shortcuts/money.png" alt="">
            <small class="t-overflow">Purchases</small>
        </a>
        <a class="shortcut tile" href="">
            <img src="img/shortcuts/twitter.png" alt="">
            <small class="t-overflow">Tweets</small>
        </a>
        <a class="shortcut tile" href="">
            <img src="img/shortcuts/calendar.png" alt="">
            <small class="t-overflow">Calendar</small>
        </a>
        <a class="shortcut tile" href="">
            <img src="img/shortcuts/stats.png" alt="">
            <small class="t-overflow">Statistics</small>
        </a>
        <a class="shortcut tile" href="">
            <img src="img/shortcuts/connections.png" alt="">
            <small class="t-overflow">Connection</small>
        </a>
        <a class="shortcut tile" href="">
            <img src="img/shortcuts/reports.png" alt="">
            <small class="t-overflow">Reports</small>
        </a>
    </div>

    <hr class="whiter" />

    <!-- Quick Stats -->
    <div class="block-area">
        <div class="row">
            <div class="col-md-3 col-xs-6">
                <div class="tile quick-stats">
                    <div id="stats-line-2" class="pull-left"></div>
                    <div class="data">
                        <h2 data-value="98">0</h2>
                        <small>Tickets Today</small>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-xs-6">
                <div class="tile quick-stats media">
                    <div id="stats-line-3" class="pull-left"></div>
                    <div class="media-body">
                        <h2 data-value="1452">0</h2>
                        <small>Shipments today</small>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-xs-6">
                <div class="tile quick-stats media">

                    <div id="stats-line-4" class="pull-left"></div>

                    <div class="media-body">
                        <h2 data-value="4896">0</h2>
                        <small>Orders today</small>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-xs-6">
                <div class="tile quick-stats media">
                    <div id="stats-line" class="pull-left"></div>
                    <div class="media-body">
                        <h2 data-value="29356">0</h2>
                        <small>Site visits today</small>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <hr class="whiter" />

    <!-- Main Widgets -->

    <h4 class="page-title">Sites   Listing</h4>

    <div class="row">
        <div class="col-md-12" >
            <div class="tab-pane" id="closure">
                <!-- Responsive Table -->
                <div class="block-area" id="responsiveTable">
                    <div class="table-responsive">
                        <h3 class="block-title"> ADD SITE </h3>
                        <a href="{{ url('addsite') }}" class="btn btn-sm">
                            <i class="fa fa-plus" aria-hidden="true" title="Add new recipe" data-toggle="tooltip"></i>
                        </a>
                        <table class="table tile table-striped" id="ClockingTimePrintTable">
                            <thead>
                            <tr>
                                {{--<th>Id</th>--}}
                                <th>ID</th>
                                <th>COMPANY ID</th>
                                <th>SITE NAME</th>
                                <th>DB NAME</th>
                                <th>SITE CODE</th>
                                {{--<th>ACTIONS</th>--}}

                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Chat -->
</div>

@endsection
@section('footer')
    <script>

        jQuery(document).ready(function($){

            $.ajax({
                url: '{!! url('/getsitelist/')!!}',
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    assignToEventsColumns(data);
                }
            });

            function assignToEventsColumns(data) {
                var table = $('#ClockingTimePrintTable').dataTable({
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
                        {data: 'company_id', name: 'company_id'},

                        {data: 'site_name', name: 'site_name'},
                        {data: 'db_name', name: 'db_name'},
                        {data: 'site_code', name: 'site_code'},


                        {data: function(d)
                            {
                                return "<a href='{!! url('selectSite/" + d.id + "') !!}' class='btn btn-sm'>" + 'View' + "</a>";
                            },"name" : 'name'},


                    ],

                    "aoColumnDefs": [
                        {
                            "aTargets": [4],
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
@endsection