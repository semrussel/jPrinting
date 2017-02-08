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

	    </div>

    </div><!-- /.row -->

</div>

@stop