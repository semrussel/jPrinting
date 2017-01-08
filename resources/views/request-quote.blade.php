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
        <h3 class="serv-main-title col-md-offset-3"><b>Request a Quote</b></h3>
        <div class="col-md-9 serv-main-box">
            <div class="col-lg-12">
                <div class="page-header-border"></div>
                <h2 class="page-header serv">Customer Information</h2>
                <div class="clear"></div>

                <div class="col-md-6">
                    <input type="text" id="fname" class="form-control" placeholder="First Name" required><br>
                    <input type="text" id="street" class="form-control" placeholder="Email Address" required>
                </div>
                <div class="col-md-6">
                    <input type="text" id="sname" class="form-control" placeholder="Last Name" required><br>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="page-header-border"></div>
                <h2 class="page-header serv">Quote Details</h2>
                <div class="clear"></div>

                <div class="col-md-12">
                    <input type="text" id="fname" class="form-control" placeholder="Quote Title" required><br>
                    <b class="col-xs-4 col-sm-3">Quote Type:</b>
                    <label class="col-xs-4 col-sm-3"><input type="radio" name="optradio"> Existing Product</label>
                    <label class="col-xs-4 col-sm-3"><input type="radio" name="optradio"> Custom Product</label>
                </div>

                <div class="col-md-6">
                    <br>
                    <input type="text" id="fname" class="form-control" placeholder="Quantity" required><br>
                    <input type="text" id="street" class="form-control" placeholder="Size" required><br>
                    <textarea class="form-control" rows="5" id="comment" placeholder="Additional Details"></textarea><br>

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