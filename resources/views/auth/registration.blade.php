@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div> <h1>   Add     user  </h1>  </div>
                <div class="panel panel-default">

                    <div class="panel-body">
                        {{--<form class="form-horizontal" method="POST" action="/storeUser">--}}
                            <form class="form-horizontal" action="storeUser" method="post">
                        {{--<form class="form-horizontal" method="POST" action="/addUser">--}}
                            {{--<form method="Post" action="/auth/register">--}}
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name"  style="text-align: left" class="col-md-4 control-label">NAME</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            </br>

                            <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                                <label for="surname"  style="text-align: left" class="col-md-4 control-label">SURNAME</label>

                                <div class="col-md-6">
                                    <input id="surname" type="text" class="form-control" name="surname" value="{{ old('surname') }}" required autofocus>

                                    @if ($errors->has('surname'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            </br>

                            <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                                <label for="role"   style="text-align: left" class="col-md-4 control-label">ROLE</label>

                                <div class="col-md-6 ">

                                    <select class="form-control m-bot15" name="role">
                                        <option value="0" selected disabled> Select Role</option>

                                        @if ($roles->count())

                                            @foreach($roles as $role)
                                                <option value="{{ $role->id }}" {{ $selectedRole == $role->id ? 'selected="selected"' : '' }}>{{ $role->name }}
                                                </option>
                                            @endforeach

                                        @endif

                                    </select>

                                </div>
                            </div>

                            </br>

                            <div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}">
                                <label for="company"  style="text-align: left" class="col-md-4 control-label">COMPANY</label>

                                <div class="col-md-6 ">

                                    <select class="form-control m-bot15" name="company_id">
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

                            <div class="form-group{{ $errors->has('cellphone') ? ' has-error' : '' }}">
                                <label for="cellphone"  style="text-align: left"  class="col-md-4 control-label">CELL PHOME</label>

                                <div class="col-md-6">
                                    <input id="cellphone" type="text" class="form-control" name="cellphone" value="{{ old('cellphone') }}" required autofocus>

                                    @if ($errors->has('cellphone'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('cellphone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            </br>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email"  style="text-align: left" class="col-md-4 control-label">E-MAIL  ADDRESS</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            </br>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" style="text-align: left" class="col-md-4 control-label">PASSWEORD </label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            </br>

                            <div class="form-group">
                                <label for="password-confirm"  style="text-align: left" class="col-md-4 control-label">CONFIRM  PASSWORD</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>
                         </br>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn  btn-danger"  style="background-color: forestgreen">
                                         Add
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
