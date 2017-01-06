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
        <h3 class="serv-main-title col-md-offset-3">Registration</h3>
        <div class="col-md-9 serv-main-box">
            <div class="col-lg-12">
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
            </div>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- container -->
@stop