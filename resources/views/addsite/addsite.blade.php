@extends('master')

@section('content')
    <div class="container-fluid">
<div  class="row">
    <div  style="position: absolute ; left: 15%; right: 15%" >
        <br> <br>
        <div class="container">
            <form action="siteconfiguration" method="post">

                {{ csrf_field() }}

                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">SITE_NAME</label>
                    <div class="col-sm-10">
                        <input type="text"  name="SITE_NAME" class="form-control" id="inputPassword3" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3"  class="col-sm-2 col-form-label">DB_CONNECTION</label>
                    <div class="col-sm-10">
                        <input type="text" name="DB_CONNECTION" class="form-control" id="inputEmail3" placeholder="mysql">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">DB_HOST</label>
                    <div class="col-sm-10">
                        <input type="text" name="DB_HOST" class="form-control" id="inputPassword3" placeholder="127.0.0.1">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">DB_PORT</label>
                    <div class="col-sm-10">
                        <input type="text" name="DB_PORT" class="form-control" id="inputPassword3" placeholder="3306">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">DB_DATABASE</label>
                    <div class="col-sm-10">
                        <input type="text" name="DB_DATABASE" class="form-control" id="inputPassword3" placeholder="DB Name">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">DB_USERNAME</label>
                    <div class="col-sm-10">
                        <input type="text" name="DB_USERNAME" class="form-control" id="inputPassword3" placeholder="*****">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">DB_PASSWORD</label>
                    <div class="col-sm-10">
                        <input type="text"  name="DB_PASSWORD" class="form-control" id="inputPassword3" placeholder="*****">
                    </div>
                </div>




                <div>

                    <div   style="position: absolute" >
                        <input type="submit" class="btn-info" id="inputPassword3" value="Add Site">
                    </div>
                </div>


            </form>
        </div>

</div>
    </div>
    </div>
    </div>
@endsection