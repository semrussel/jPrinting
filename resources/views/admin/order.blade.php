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
			                <th>Customer</th>
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
				                <?php $name = DB::table('users')->where('id',$orders[$i]->order_by)->get(); ?>
				                <th>{{ ucwords($name[0]->name) }}</th>
				                <td>{{ ucwords($orders[$i]->status) }}</td>
				                <td>
				                	<a href="/admin-orders-view/{{ $orders[$i]->id }}" class="admin-button">View Order</a>
				                </td>
				            </tr>
			            @endfor
		            </tbody>
	            </table>
    		</div>

	    </div>

    </div><!-- /.row -->

</div>
@if(isset($_GET['success']))
<script>
alert('Successfully added price!');
</script>
@endif
@if(isset($_GET['pay']))
<script>
alert('Successfully confirmed a payment!');
</script>
@endif
@stop