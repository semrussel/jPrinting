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
        <h3 class="serv-main-title col-md-offset-3"><b>User Profile</b></h3>
        <div class="col-md-9 serv-main-box">

            <div class="col-xs-12">
                <div class="page-header-border"></div>
                <h2 class="page-header serv">Customer Information</h2>
                <div class="clear"></div>
            </div>

            <div class="col-md-8">

                <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Name</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
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
                            <button class="btn btn-primary" href="#">Change Password</button>
                            <!-- <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif -->
                        </div>
                    </div>

                    <!-- <div class="form-group">
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
                    </div> -->
                </form>

            </div>
            <div class="clear"></div>

            <div class="col-xs-12">
                <div class="page-header-border"></div>
                <h2 class="page-header serv">Order List</h2>
                <div class="clear"></div>
            </div>

            <div class="col-md-12">
                <table id="order-table" class="table table-bordered admin-table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Status</th>
                            <!-- <th>Action</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        @for($i=0; $i<15; $i++)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>Product</td>
                                <td>100</td>
                                <td>On the Way</td>
                                <!-- <td><button class="admin-button">Cancel</button></td> -->
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <!-- /.row -->

</div>
<!-- container -->
@stop