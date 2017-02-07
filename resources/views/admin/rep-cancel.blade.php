@extends('template.admin')

@section('title') Jimbes Printing @stop

@section('content') 

<link rel="stylesheet" href="{{ url('css/graphs.css') }}">
<link rel="stylesheet" href="https://cdn.oesmith.co.uk/morris-0.5.1.css">
    
<div class="col-md-10 col-md-offset-2 dash-main">

	<div class="row">
		<div class="col-xs-12">

			<p class="col-xs-12 dash-title"><b>Reports</b> | Cancelled Orders</p>

			<div class="col-xs-12">
				<ul class="nav nav-pills">
					<li class="active"><a data-toggle="pill" href="#mon">Monthly</a></li>
					<li><a data-toggle="pill" href="#ann">Annually</a></li>
				</ul>

				<div class="tab-content">
					<div id="mon" class="tab-pane fade in active" style="padding-top:20px;">
						<table id="order-table" class="table table-bordered admin-table" cellspacing="0" width="100%">
					        <thead>
					            <tr>
					                <th>Order ID</th>
					                <th>Product Name</th>
					                <th>Quantity</th>
					                <th>Customer</th>
					                <th>Status</th>
					                <th>Action</th>
					            </tr>
					        </thead>
					        <tbody>
					        	@for($i=0; $i<15; $i++)
						            <tr>
						                <td>{{ $i }}</td>
						                <td>Product Name</td>
						                <td>Quantity</td>
						                <th>Customer</th>
						                <td>Status</td>
						                <td>
						                	<!-- <a href="/admin-orders-view/" class="admin-button">View Order</a> -->
						                	<!-- <a href="/change-order-status" class="admin-button">Change Status</a> -->
						                </td>
						            </tr>
					            @endfor
				            </tbody>
			            </table>
					</div>
					<div id="ann" class="tab-pane fade" style="padding-top:20px;">
						<table id="order-table-1" class="table table-bordered admin-table" cellspacing="0" width="100%">
					        <thead>
					            <tr>
					                <th>Order ID</th>
					                <th>Product Name</th>
					                <th>Quantity</th>
					                <th>Customer</th>
					                <th>Status</th>
					                <th>Action</th>
					            </tr>
					        </thead>
					        <tbody>
					        	@for($i=0; $i<15; $i++)
						            <tr>
						                <td>{{ $i }}</td>
						                <td>Product Name</td>
						                <td>Quantity</td>
						                <th>Customer</th>
						                <td>Status</td>
						                <td>
						                	<!-- <a href="/admin-orders-view/" class="admin-button">View Order</a> -->
						                	<!-- <a href="/change-order-status" class="admin-button">Change Status</a> -->
						                </td>
						            </tr>
					            @endfor
				            </tbody>
			            </table>
					</div>
				</div>	
			</div>

	    </div>

    </div><!-- /.row -->

</div>

@stop