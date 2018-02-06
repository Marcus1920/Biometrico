@extends('master')

@section('content')
    <div class="container-fluid">
<div  class="row">
    <div  style="position: absolute ; left: 15%; right: 15%" >
        <br> <br>
        <div class="container">
            @if (count($errors) > 0)
                <div class = "alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="siteconfiguration" method="post"  onsubmit="$('#loading').modal('show')">
                <div id="loading"  style="position: absolute ; background-color: black; width: 100% ; height:100%; display: none"><img  style="border-radius: 70%"  width="100%" height="100%" src="{{ asset('/img/Loading-Full.gif') }}"  alt="" /></div>

                {{ csrf_field() }}


                <div class="form-group row {{ $errors->has('company') ? ' has-error' : '' }}">
                    <label for="company"  class="col-sm-2 col-form-label">COMPANY</label>

                    <div class="col-md-10 ">

                        <select class="form-control  " name="company_id">
                            <option value="0" selected disabled>Select Company</option>

                            @if($companies->count())

                                @foreach($companies as $company)
                                    <option value="{{$company->id}}"> {{$company->name}}</option>
                                @endforeach
                            @endif

                        </select>

                    </div>
                </div>
 </br>

                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">SITE_NAME</label>
                    <div class="col-sm-10">
                        <input type="text"   name="SITE_NAME" class="form-control" id="inputPassword3" placeholder="">
                    </div>
                </div>


                </br>

                <div class="form-group row">
                    <label for="inputEmail3"  class="col-sm-2 col-form-label">DB_CONNECTION</label>
                    <div class="col-sm-10">
                        <input type="text" name="DB_CONNECTION" class="form-control" id="inputEmail3"  value="mysql" placeholder="mysql" disabled>
                    </div>
                </div>

                </br>

                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">DB_HOST</label>
                    <div class="col-sm-10">
                        <input type="text" name="DB_HOST" class="form-control" value="127.0.0.1" id="inputPassword3" placeholder="127.0.0.1" disabled>
                    </div>
                </div>

                </br>

                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">DB_PORT</label>
                    <div class="col-sm-10">
                        <input type="text" name="DB_PORT" class="form-control" id="inputPassword3" value="3306" placeholder="3306" disabled>
                    </div>
                </div>

                </br>

                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">DB_DATABASE</label>
                    <div class="col-sm-10">
                        <input type="text" name="DB_DATABASE" class="form-control" id="inputPassword3" placeholder="DB Name" disabled>
                    </div>
                </div>
                </br>

                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">DB_USERNAME</label>
                    <div class="col-sm-10">
                        <input type="text" name="DB_USERNAME" class="form-control" id="inputPassword3" value="root" placeholder="*****" disabled>
                    </div>
                </div>
                </br>

                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">DB_PASSWORD</label>
                    <div class="col-sm-10">
                        <input type="text"  name="DB_PASSWORD" class="form-control" id="inputPassword3"  value="Null" placeholder="*****" disabled>
                    </div>
                </div>




                <div>

                    <div   style="position: absolute" >
                        <input type="submit" class="btn-info" id="inputPassword3" value="Add Site" onclick="$('#loading').modal('show');">
                    </div>
                </div>


            </form>

            <div id="lo" style="display:none;"><img src="ajax_progress2.gif" alt="" /></div>
        </div>

</div>
    </div>
    </div>
    </div>
@endsection
@section('footer')
    <script>

        jQuery(document).ready(function($){

            $('#loading').hide();

        });
    </script>
@endsection