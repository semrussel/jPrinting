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
                        @for($i=0; $i<count($orders); $i++)
                            <tr>
                                <td>{{ $orders[$i]->id }}</td>
                                <td>{{ $orders[$i]->product }}</td>
                                <td>{{ $orders[$i]->quantity }}</td>
                                <td>{{ $orders[$i]->status }}</td>
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
@if(isset($_GET['success']))
<script>
alert('Order Success! Wait for our email regarding the price!');
</script>
@endif
@stop