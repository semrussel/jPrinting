@extends('template.admin')

@section('title') Jimbes Printing @stop

@section('content')

<div class="col-md-10 col-md-offset-2 dash-main">

	<div class="row">
		<div class="col-xs-12">

			<p class="col-xs-12 dash-title"><b>Products</b> | Main Products <a href="admin-products-mainproducts-add" class="add-button"><i class="fa fa-plus" aria-hidden="true"></i> Add New</a></p>

			<div class="col-xs-12">
		        <table id="order-table" class="table table-bordered admin-table" cellspacing="0" width="100%">
			        <thead>
			            <tr>
			                <th>Product ID</th>
			                <th>Product Name</th>
			                <th>Has Sub Category</th>
			                <th>Action</th>
			            </tr>
			        </thead>
			        <tbody>
			        	@foreach($products as $product)
				            <tr>
				                <td>{{ $product->id }}</td>
				                <td>{{ $product->name }}</td>
				                <td>{{ checkBool($product->is_subcat) }}</td>
				                <td>
				                	<?php $url = url('/edit-mainprod/'.$product->id) ?>
				                	<a href="{{ $url }}" class="admin-button">Edit</a> 

					                <form action="{{ url('/delete-mainprod') }}" method="POST" style="display: -webkit-inline-box;">
					                	<input type="hidden" name="id" value="{{ $product->id }}">
					                	<input type="submit" value="Delete" class="admin-button">
					            	</form>
				            	</td>
				            </tr>
			            @endforeach
		            </tbody>
	            </table>
        	</div>

	    </div>

    </div><!-- /.row -->

</div>

@stop
@if(isset($_GET['success']))
@if($_GET['success'] == 1)
<script>
alert('Successfully added Main Product!');
</script>
@elseif($_GET['success'] == 2)
<script>
alert('Successfully deleted Main Product!');
</script>
@elseif($_GET['success'] == 3)
<script>
alert('Successfully edited Main Product!');
</script>
@endif
@endif