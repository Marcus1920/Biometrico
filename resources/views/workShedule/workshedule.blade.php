@extends('master')

@section('content')
    <ol class="breadcrumb hidden-xs">
        <li><a href="{{ url('/users') }}">Home</a></li>
        <li class="active">Clock List</li>
    </ol>
    <h4 class="page-title">Work Shedule   Listing</h4>

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
                        <table class="table tile table-striped" id="sheduleListTable">
                            <thead>
                            <tr>
                                {{--<th>Id</th>--}}
                                <th>WORK_SCHEDULE_KEY</th>
                                <th>EMPLOYEE_KEY </th>
                                <th>SHIFT_KEY</th>
                                <th>ATTENDANCE_DATE_START</th>
                                <th>ATTENDANCE_DATE_END</th>
                                <th>TIME_END</th>
                                <th>TOTAL_WORK_MINUTES</th>

                                <th>DELETED</th>
                                <th>ABSENT_DATA_KEY</th>
                                <th>PUBLIC_HOLIDAY</th>

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

            $.ajax({
                url: '{!! url('/getworksheduleList/')!!}',
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    assignToEventsColumns(data);
                }
            });

            function assignToEventsColumns(data) {
                var table = $('#sheduleListTable').dataTable({
//                 "dom": 'C<"clear">lfrtip',

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
                            title  : 'Siyaleader_Report',
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
                        {data: 'WORK_SCHEDULE_KEY', name: 'WORK_SCHEDULE_KEY'},
                        {data: 'EMPLOYEE_KEY', name: 'EMPLOYEE_KEY'},

                        {data: 'SHIFT_KEY', name: 'SHIFT_KEY'},
                        {data: 'ATTENDANCE_DATE_START', name: 'ATTENDANCE_DATE_START'},
                        {data: 'ATTENDANCE_DATE_END', name: 'ATTENDANCE_DATE_END'},

                        {data: 'TIME_END', name: 'TIME_END'},
                        {data: 'TOTAL_WORK_MINUTES', name: 'TOTAL_WORK_MINUTES'},

                        {data: 'DELETED', name: 'DELETED'},
                        {data: 'ABSENT_DATA_KEY', name: 'ABSENT_DATA_KEY'},
                        {data: 'PUBLIC_HOLIDAY', name: 'PUBLIC_HOLIDAY'},





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