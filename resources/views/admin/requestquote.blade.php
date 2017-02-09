@extends('template.admin')

@section('title') Jimbes Printing @stop

@section('content') 
    
<div class="col-md-10 col-md-offset-2 dash-main">

	<div class="row">
		<div class="col-xs-12">

			<p class="col-xs-12 dash-title"><b>Requests for Quote</b></p>

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
			        	@for($i=0; $i<count($requests); $i++)
				            <tr>
				                <td>{{ $requests[$i]->id }}</td>
				                <td>{{ $requests[$i]->product }}</td>
				                <td>{{ $requests[$i]->quantity }}</td>
				                <td>{{ $requests[$i]->status }}</td>
				                <td><a href="/admin-request-view/{{ $requests[$i]->id }}" class="admin-button">View Request</a></td>
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
@stop