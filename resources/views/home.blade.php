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
    <h4 class="page-title">Clock  Listing for {{$site->site_name}}</h4>

    <div class="row">
        <div class="col-md-12" >
            <div class="tab-pane" id="closure">
                <!-- Responsive Table -->
                <div class="block-area" id="responsiveTable">
                    <div class="table-responsive">
                        <h3 class="block-title"> CLOCK </h3>
                        <a href="{{ url('') }}" class="btn btn-sm">
                            <i class="fa fa-plus" aria-hidden="true" title="Add new recipe" data-toggle="tooltip"></i>
                        </a>
                        <table class="table tile table-striped" id="ClockingTimePrintTable">
                            <thead>
                            <tr>
                                {{--<th>Id</th>--}}
                                <th>CLOCK_DATE</th>
                                <th>CLOCK_DAY </th>
                                <th>TIME_IN_1</th>
                                <th>TIME_IN_2</th>
                                <th>TIME_OUT_2</th>
                                <th>TIME_IN_3</th>
                                <th>TIME_OUT_3</th>

                                <th>TIME_IN_4</th>
                                <th>TIME_OUT_4</th>
                                <th>TIME_IN_5</th>

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
                {{--url: '{!! url('/getClockingList/')!!}',--}}
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
                        {data: 'CLOCK_DATE', name: 'CLOCK_DATE'},
                        {data: 'CLOCK_DAY', name: 'CLOCK_DAY'},

                        {data: 'TIME_IN_1', name: 'TIME_IN_1'},
                        {data: 'TIME_IN_2', name: 'TIME_IN_2'},
                        {data: 'TIME_OUT_2', name: 'TIME_OUT_2'},

                        {data: 'TIME_IN_3', name: 'TIME_IN_3'},
                        {data: 'TIME_OUT_3', name: 'TIME_OUT_3'},

                        {data: 'TIME_IN_4', name: 'TIME_IN_4'},
                        {data: 'TIME_OUT_4', name: 'TIME_OUT_4'},
                        {data: 'TIME_IN_5', name: 'TIME_IN_5'},





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