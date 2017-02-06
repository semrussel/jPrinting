@extends('template.main')

@section('title') Jimbes Printing @stop

@section('content') 

<div class="inner-pad"></div>

<!-- Page Content -->
<div class="container">

    <!-- Services -->
    <div class="row">
        <div class="col-md-3">
            @include('inc/sidebar')
        </div>
        <h3 class="serv-main-title col-md-offset-3"><b>Registration</b></h3>
        <div class="col-md-9 serv-main-box">

            <div class="page-header-border"></div>
            <h2 class="page-header serv">Customer Information</h2>
            <div class="clear"></div>

            <div class="col-md-8">


                <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('firstName') ? ' has-error' : '' }}">
                        <label for="firstName" class="col-md-4 control-label">First name</label>

                        <div class="col-md-6">
                            <input id="firstName" type="text" class="form-control" name="firstName" value="{{ old('firstName') }}" required autofocus>

                            @if ($errors->has('firstName'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('firstName') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('lastName') ? ' has-error' : '' }}">
                        <label for="lastName" class="col-md-4 control-label">Last name</label>

                        <div class="col-md-6">
                            <input id="lastName" type="text" class="form-control" name="lastName" value="{{ old('lastName') }}" required autofocus>

                            @if ($errors->has('lastName'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('lastName') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('contact') ? ' has-error' : '' }}">
                        <label for="contact" class="col-md-4 control-label">Contact Number</label>

                        <div class="col-md-6">
                            <input class="form-control contact-first" value="63" disabled>
                            <input id="contact" type="number" class="form-control contact-next" name="contact" value="{{ old('contact') }}" required>

                            @if ($errors->has('contact'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('contact') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Password</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Register
                            </button>
                        </div>
                    </div>
                </form>

            </div>


            <!-- <div class="col-lg-12">
                <div class="page-header-border"></div>
                <h2 class="page-header serv">Customer Information</h2>
                <div class="clear"></div>

                <div class="col-md-6">
                    <input type="text" id="fname" class="form-control" placeholder="First Name" required><br>
                    <input type="text" id="street" class="form-control" placeholder="Street" required><br>
                    <input type="text" id="street" class="form-control" placeholder="State" required><br>
                    <input type="text" id="street" class="form-control" placeholder="Zip Code" required><br>
                    <input type="text" id="street" class="form-control" placeholder="Company Name" required>
                </div>
                <div class="col-md-6">
                    <input type="text" id="sname" class="form-control" placeholder="Last Name" required><br>
                    <input type="text" id="street" class="form-control" placeholder="Country" required><br>
                    <input type="text" id="street" class="form-control" placeholder="City" required><br>
                    <input type="text" id="street" class="form-control" placeholder="Phone" required>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="page-header-border"></div>
                <h2 class="page-header serv">Login Information</h2>
                <div class="clear"></div>

                <div class="col-md-6">
                    <input type="text" id="fname" class="form-control" placeholder="Email" required><br>
                    <input type="text" id="street" class="form-control" placeholder="Password" required><br>
                    <input type="text" id="street" class="form-control" placeholder="Confirm Password" required><br>

                    <button type="button" class="btn btn-primary">Submit</button>
                    <div class="clear"></div><br>
                </div>
            </div> -->
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- container -->
@stop