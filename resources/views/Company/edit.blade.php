@extends('master')

@section('content')

    <ol class="breadcrumb hidden-xs">
        <li><a href="{{ url('/master') }}">Home</a></li>
        <li><a href="{{ url('/companyList') }}">Company List</a></li>
        <li class="active">Edit Company</li>
        {{--<li class="active"><a>  </a></li>--}}
        {{--<li class="active"><a>Posts</a></li>--}}
    </ol>
    <h4 class="page-title">Edit Company</h4>

    <div class="container-fluid">
        <div  class="row">
            <div  style="position: absolute ; left: 15%; right: 15%" >
                <br> <br>
                <br/>
                <br/>
                <br/>
                <div class="container">
                    {{--<form class="form-horizontal" method="POST" action="{{ route('storeCompany') }}">--}}
                    <form action="{{ url('saveCompany')}}" method="post" enctype="multipart/form-data">

                        <input type="hidden" value="{{$company->id}}" class="form-control" name="id">

                        {{ csrf_field() }}

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Company Name</label>
                            <div class="col-sm-10">
                                <input type="text" value="{{$company->name}}"  name="name" class="form-control" placeholder="" required="required">
                            </div>
                        </div>


                        </br>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Company Logo</label>
                            <div class="col-sm-10">
                                <img src="{{$company->logo}}" style="width: 200px;height: 150px" alt="logo">
                                <input type="file" name="image" id="file" value="{{$company->logo}}">
                            </div>
                        </div>
                        <div>
                            <br/>

                            <label class="col-sm-6 col-form-label">Choose Background Image</label>

                            <div class="form-group row">
                                <div class="col-md-3">
                                    <input type="radio" value="Background/1.jpg" name="background">
                                    <img src="{{ asset('Background/1.jpg') }}" style="width: 200px;height: 150px">

                                </div>
                                <div class="col-md-3">
                                    <input type="radio" value="Background/2.jpg" name="background">
                                    <img src="{{ asset('Background/2.jpg') }}" style="width: 200px;height: 150px">

                                </div>
                                <div class="col-md-3">
                                    <input type="radio" value="Background/3.jpg" name="background">
                                    <img src="{{ asset('Background/3.jpg') }}" style="width: 200px;height: 150px">

                                </div>
                                <div class="col-md-3">
                                    <input type="radio" value="Background/4.jpg" name="background">
                                    <img src="{{ asset('Background/4.jpg') }}" style="width: 200px;height: 150px">

                                </div>
                                <div class="col-md-3">
                                    <input type="radio" value="Background/5.jpg" name="background">
                                    <img src="{{ asset('Background/5.jpg') }}" style="width: 200px;height: 150px">

                                </div>
                                <div class="col-md-3">
                                    <input type="radio" value="Background/6.jpg" name="background">
                                    <img src="{{ asset('Background/6.jpg') }}" style="width: 200px;height: 150px">

                                </div>
                                <div class="col-md-3">
                                    <input type="radio" value="Background/7.jpg" name="background">
                                    <img src="{{ asset('Background/7.jpg') }}" style="width: 200px;height: 150px">

                                </div>
                                <div class="col-md-3">
                                    <input type="radio" value="Background/8.jpeg" name="background">
                                    <img src="{{ asset('Background/8.jpeg') }}" style="width: 200px;height: 150px">

                                </div>
                            </div>


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