@extends('master')

@section('content')
    <ol class="breadcrumb hidden-xs">
        <li><a href="{{ url('/master') }}">Home</a></li>
        <li><a href="{{ url('/companyList') }}">Company List</a></li>
        <li class="active">Add Company</li>
        {{--<li class="active"><a>  </a></li>--}}
        {{--<li class="active"><a>Posts</a></li>--}}
    </ol>
    <h4 class="page-title">Add Company</h4>

    <div class="container-fluid">
        <div  class="row">
            <div  style="position: absolute ; left: 15%; right: 15%" >
                <br> <br>
                <br/>
                <br/>
                <br/>
                <div class="container">
                    {{--<form class="form-horizontal" method="POST" action="{{ route('storeCompany') }}">--}}
                        <form action="storeCompany" method="post">

                        {{ csrf_field() }}

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Company Name</label>
                            <div class="col-sm-10">
                                <input type="text"   name="name" class="form-control" placeholder="" required="required">
                            </div>
                        </div>


                        </br>

                        <div>

                            <div   style="position: absolute" >
                                <input type="submit" value="Add Company" class="btn btn-primary">
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
    </div>
@endsection