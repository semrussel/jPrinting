@extends('template.admin')

@section('title') Jimbes Printing @stop

@section('content') 
    
<div class="col-md-10 col-md-offset-2 dash-main">

	<div class="row">
		<div class="col-xs-12">

			<p class="col-xs-12 dash-title"><b>Orders</b></p>

			<div class="col-xs-12">
		        <table id="order-table" class="table table-bordered admin-table" cellspacing="0" width="100%">
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
			        	@for($i=0; $i<count($orders); $i++)
				            <tr>
				                <td>{{ $orders[$i]->id }}</td>
				                <td>{{ ucwords($orders[$i]->product) }}</td>
				                <td>{{ ucwords($orders[$i]->quantity) }}</td>
				                <td>{{ ucwords($orders[$i]->status) }}</td>
				                <td><button class="admin-button">Send Price</button></td>
				            </tr>
			            @endfor
		            </tbody>
	            </table>
    		</div>

	    </div>

    </div><!-- /.row -->

</div>

@stop