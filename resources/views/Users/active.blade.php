@extends('master')
@section('content')
    <ol class="breadcrumb hidden-xs">
        <li class="active">Users List</li>
        {{--<li class="active"><a>  </a></li>--}}
        {{--<li class="active"><a>Posts</a></li>--}}
    </ol>
    <h4 class="page-title">Active Users Listing</h4>

    <div class="row">
        <div class="col-md-12" >
            <div class="tab-pane" id="closure">
                <!-- Responsive Table -->
                <div class="block-area" id="responsiveTable">
                    <div class="table-responsive">
                        <h3 class="block-title">Users</h3>
                        <a href="{{ url('registerUser') }}" class="btn btn-sm">
                            <i class="fa fa-plus" aria-hidden="true" title="Add new user" data-toggle="tooltip"></i>
                        </a>
                        <table class="table tile table-striped" id="UsersTable">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>surname</th>
                                <th>cellphone</th>
                                <th>role</th>
                                <th>email</th>
                                <th>Action</th>
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

            var $data = {!! $users !!};

            {{--$.ajax({--}}
            {{--url: '{!! url('/getworksheduleList/')!!}',--}}
            {{--type: 'GET',--}}
            {{--dataType: 'json',--}}
            {{--success: function (data) {--}}
            {{--assignToEventsColumns(data);--}}
            {{--}--}}
            {{--});--}}

            assignToEventsColumns($data);

            function assignToEventsColumns(data) {
                var table = $('#UsersTable').dataTable({
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
                        {data: 'surname', name: 'surname'},
                        {data: 'cellphone', name: 'cellphone'},
                        {data: 'role.name', name: 'role.name'},
                        {data: 'email', name: 'email'},


                        {data: function(d)

                        {
                            return "<a href='{!! url('deactiveUser/" + d.id + "') !!}' class='btn btn-sm glyphicon glyphicon-edit'>" + ' DeActivate' + "</a>";
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


        });
    </script>
@endsection