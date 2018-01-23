@extends('master')

@section('content')

    <!-- Shortcuts -->
    <div class="block-area shortcut-area">
        <a class="shortcut tile"   href="{{ url('/selectSite',$site->id)}}">
            <img src="{{ url('img/shortcuts/clock-in.png') }}" alt="Clock Listing">
            <small class="t-overflow">Clock Listing</small>
        </a>
        <a class="shortcut tile" href="{{ url('/attendance',$site->id)}}">
            <img src="{{ url('img/shortcuts/attended.png') }}" alt="">
            <small class="t-overflow">Attendance List</small>
        </a>
        <a class="shortcut tile"  href="{{ url('/workshedul',$site->id)}}">
            <img src="{{ url('img/shortcuts/Schedule.png') }}" alt="">
            <small class="t-overflow">Work Schedule</small>
        </a>
        <a class="shortcut tile" href="">
            <img src="{{ url('img/shortcuts/statistic.png') }}" alt="">
            <small class="t-overflow">Statistics</small>
        </a>
        <a class="shortcut tile" href="">
            <img src="{{ url('img/shortcuts/Document.png') }}" alt="">
            <small class="t-overflow">Connection</small>
        </a>
        <a class="shortcut tile" href="">
            <img src="{{ url('img/shortcuts/Copy.png') }}" alt="">
            <small class="t-overflow">Reports</small>
        </a>
    </div>

    <hr class="whiter" />

    <ol class="breadcrumb hidden-xs">
        <li><a href="{{ url('/users') }}">Home</a></li>
        <li class="active">Attendance List</li>
    </ol>
    <h4 class="page-title">Attendance Listing of {{$site->site_name}}</h4>

    <div class="row">
        <div class="col-md-12" >
            <div class="tab-pane" id="closure">
                <!-- Responsive Table -->
                <div class="block-area" id="responsiveTable">
                    <div class="table-responsive">
                        <h3 class="block-title"> Attendance </h3>
                        <a href="{{ url('') }}" class="btn btn-sm">
                            <i class="fa fa-plus" aria-hidden="true" title="Add new recipe" data-toggle="tooltip"></i>
                        </a>
                        <table class="table tile table-striped" id="ClockingTimePrintTable">
                            <thead>
                            <tr>
                                {{--<th>Id</th>--}}
                                <th>ATTENDANCE_KEY</th>
                                <th>COMPANY_KEY </th>
                                <th>TERMINAL_REC_NO</th>
                                <th>ATTENDANCE_DATE</th>
                                <th>ATTENDANCE_TIME</th>
                                <th>DEVICE_CONFIGURATION_KEY</th>
                                <th>CALCULATED</th>

                                <th>VERIFIED</th>
                                <th>OPERATOR_KEY</th>
                                <th>ENROLL_ID</th>

                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
@section('footer')
    <script>

        jQuery(document).ready(function($){

            var $data = {!! $shedule !!};

            {{--$.ajax({--}}
                {{--url: '{!! url('/getattendanceList/')!!}',--}}
                {{--type: 'GET',--}}
                {{--dataType: 'json',--}}
                {{--success: function (data) {--}}
                    {{--assignToEventsColumns(data);--}}
                {{--}--}}
            {{--});--}}

            assignToEventsColumns($data);

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
                        {data: 'ATTENDANCE_KEY', name: 'ATTENDANCE_KEY'},
                        {data: 'COMPANY_KEY', name: 'COMPANY_KEY'},

                        {data: 'TERMINAL_KEY', name: 'TERMINAL_KEY'},
                        {data: 'TERMINAL_REC_NO', name: 'TERMINAL_REC_NO'},
                        {data: 'DEPARTMENT_KEY', name: 'DEPARTMENT_KEY'},

                        {data: 'ATTENDANCE_DATE', name: 'ATTENDANCE_DATE'},
                        {data: 'ATTENDANCE_TIME', name: 'ATTENDANCE_TIME'},

                        {data: 'EVENT_KEY', name: 'EVENT_KEY'},
                        {data: 'DEVICE_CONFIGURATION_KEY', name: 'DEVICE_CONFIGURATION_KEY'},
                        {data: 'CALCULATED', name: 'CALCULATED'},
                        {data: 'VERIFIED', name: 'VERIFIED'},
                        {data: 'ENROLL_ID', name: 'ENROLL_ID'},
                        {data: 'OPERATOR_KEY', name: 'OPERATOR_KEY'},







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
@endsection