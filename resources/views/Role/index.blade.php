@extends('master')
@section('content')
    <ol class="breadcrumb hidden-xs">
        <li class="active">Roles List</li>
        {{--<li class="active"><a>  </a></li>--}}
        {{--<li class="active"><a>Posts</a></li>--}}
    </ol>
    <h4 class="page-title">Roles Listing</h4>

    <div class="row">
        <div class="col-md-12" >
            <div class="tab-pane" id="closure">
                <!-- Responsive Table -->
                <div class="block-area" id="responsiveTable">
                    <div class="table-responsive">
                        <h3 class="block-title">Roles</h3>
                        <a href="{{ url('createRole') }}" class="btn btn-sm">
                            <i class="fa fa-plus" aria-hidden="true" title="Add new role" data-toggle="tooltip"></i>
                        </a>
                        <table class="table tile table-striped" id="RolesTable">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                {{--<th>Delete</th>--}}
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

            var $data = {!! $roles !!};

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
                var table = $('#RolesTable').dataTable({
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
                        {data: 'name', name: 'name'}


                        {{--{data: function(d)--}}

                        {{--{--}}
                        {{--return "<a href='{!! url('selectSite/" + d.id + "') !!}' class='btn btn-sm glyphicon glyphicon-eye-open'>" + ' View' + "</a>";--}}
                        {{--},"name" : 'name'},--}}



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