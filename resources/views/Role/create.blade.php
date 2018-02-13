<<<<<<< HEAD
=======
@extends('master')

@section('content')
    <ol class="breadcrumb hidden-xs">
        <li><a href="{{ url('/rolesList') }}">Roles List</a></li>
        <li class="active">Add Role</li>
        {{--<li class="active"><a>  </a></li>--}}
        {{--<li class="active"><a>Posts</a></li>--}}
    </ol>
    <h4 class="page-title">Add Role</h4>

    <div class="container-fluid">
        <div  class="row">
            <div  style="position: absolute ; left: 15%; right: 15%" >
                <br> <br>
                <br/>
                <br/>
                <br/>
                <div class="container">
                    {{--<form class="form-horizontal" method="POST" action="{{ route('storeCompany') }}">--}}
                    <form action="storeRole" method="post">

                        {{ csrf_field() }}

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Role Name</label>
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
>>>>>>> b35657efb1fc4f7fd217a434934cded98588669d
