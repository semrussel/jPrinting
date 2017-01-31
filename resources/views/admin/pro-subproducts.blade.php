@extends('template.admin')

@section('title') Jimbes Printing @stop

@section('content')

<div class="col-md-10 col-md-offset-2 dash-main">

	<div class="row">
		<div class="col-xs-12">

			<p class="col-xs-12 dash-title"><b>Products</b> | Sub Products <a href="admin-products-subproducts-add" class="add-button"><i class="fa fa-plus" aria-hidden="true"></i> Add New</a></p>

			<div class="col-xs-12">
		        <table id="order-table" class="table table-bordered admin-table" cellspacing="0" width="100%">
			        <thead>
			            <tr>
			                <th>Product ID</th>
			                <th>Product Name</th>
			                <th>Main Product</th>
			                <th>Action</th>
			            </tr>
			        </thead>
			        <tbody>
			        	@foreach($products as $product)
				            <tr>
				                <td>{{ $product->id }}</td>
				                <td>{{ $product->name }}</td>
				                <td>{{ geSubtProdName($product->main_id) }}</td>
				                <td><a href="" class="admin-button">Edit</a> <a href="" class="admin-button">Delete</a></td>
				            </tr>
			            @endforeach
		            </tbody>
	            </table>
        	</div>

	    </div>

    </div><!-- /.row -->

</div>

@stop