@extends('template.admin')

@section('title') Jimbes Printing @stop

@section('content')

<div class="col-md-10 col-md-offset-2 dash-main">

	<div class="row">
		<div class="col-xs-12">

			<p class="col-xs-12 dash-title"><b>Products</b> | Materials <a href="admin-products-materials-add" class="add-button"><i class="fa fa-plus" aria-hidden="true"></i> Add New</a></p>

			<div class="col-xs-12">
		        <table id="order-table" class="table table-bordered admin-table" cellspacing="0" width="100%">
			        <thead>
			            <tr>
			                <th>Product Name</th>
			                <th>Pieces</th>
			                <th>Quantity</th>
			                <th>Action</th>
			            </tr>
			        </thead>
			        <tbody>
			        	<tr>
			                <td>a</td>
			                <td>a</td>
			                <td>a</td>
			                <td><span><a href="admin-products-mainproducts-edit" class="admin-button">Edit</a> 

			                <form action="" method="POST" style="display: -webkit-inline-box;">
			                	<input type="hidden" name="id" value="">
			                	<input type="submit" value="Delete" class="admin-button">
			            	</form></span>
			            	</td>
			            </tr>
		            </tbody>
	            </table>
        	</div>

	    </div>

    </div><!-- /.row -->

</div>

@stop