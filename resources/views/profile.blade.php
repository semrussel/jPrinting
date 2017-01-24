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

            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#m1"><b>Orders</b></a></li>
                <li><a data-toggle="tab" href="#m2"><b>Requests for Quote</b></a></li>
            </ul>

            <div class="tab-content">
                <div id="m1" class="tab-pane fade in active">
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
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for($i=0; $i<count($orders); $i++)
                                    <tr>
                                        <td>{{ $orders[$i]->id }}</td>
                                        <td>{{ $orders[$i]->product }}</td>
                                        <td>{{ $orders[$i]->price }}</td>
                                        <td>{{ $orders[$i]->quantity }}</td>
                                        <td>{{ $orders[$i]->status }}</td>
                                        <td>
                                            <a href="/profile-order/{{ $orders[$i]->id }}" class="admin-button">View Order</a>
                                            <form action="{{ url('/cancel-order') }}" method="POST" style="margin-top: 5px;">
                                                <input type="hidden" name="id" value="{{ $orders[$i]->id }}"> 
                                                <input type="submit" value="Cancel Order" class="admin-button">
                                            </form>
                                        </td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>

                <div id="m2" class="tab-pane fade">
                    <div class="col-xs-12">
                        <div class="page-header-border"></div>
                        <h2 class="page-header serv">Request for Quote List</h2>
                        <div class="clear"></div>
                    </div>

                    <div class="col-md-12">
                        <table id="request-table" class="table table-bordered admin-table" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for($i=0; $i<count($quote); $i++)
                                    <tr>
                                        <td>{{ $quote[$i]->id }}</td>
                                        <td>{{ $quote[$i]->product }}</td>
                                        <td>{{ $quote[$i]->quantity }}</td>
                                        <td>{{ $quote[$i]->status }}</td>
                                        <td><a href="/profile-request/{{ $quote[$i]->id }}" class="admin-button">View Quote</button></td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
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
@if(isset($_GET['cancel']))
<script>
alert('You successfully canceled your order!');
</script>
@endif
@if(isset($_GET['pay']))
<script>
alert('You successfully paid your order!');
</script>
@endif
@stop