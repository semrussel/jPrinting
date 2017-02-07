@extends('template.admin')

@section('title') Jimbes Printing @stop

@section('content') 
    
<div class="col-md-10 col-md-offset-2 dash-main">

	<div class="row">
		<div class="col-xs-12">

			<p class="col-xs-12 dash-title"><b>Orders | Change Order Status</b></p>

			<div class="col-xs-6">
				
				<div class="col-xs-4 right"><p><b>Order ID: </b></p></div>
			    <div class="col-xs-8 no-pad"><input value="" name="id" type="text" id="width" class="form-control" disabled></div>
			    <div class="clear"></div><br>

			    <div class="col-xs-4 right"><p><b>Product Name: </b></p></div>
			    <div class="col-xs-8 no-pad"><input value="" name="product" type="text" id="width" class="form-control" disabled></div>
			    <div class="clear"></div><br>

			    <div class="col-xs-4 right"><p><b>Status: </b></p></div>
			    <div class="col-xs-8 no-pad">
			    	<select class="form-control" name="status">
				        <option>Waiting for Payment</option>
				        <option>Validating Payment</option>
				        <option>Processing the Product</option>
				        <option>Ready for Pick up / Delivery</option>
				        <option>Canceled</option>
				    </select>
		    	</div>
			    <div class="clear"></div><hr>

			    <div class="col-xs-4 col-xs-offset-8 no-pad">
                	<form action="" method="POST">
                        <input type="hidden" name="id" value=""> 
                        <input type="submit" value="Confirm" class="btn btn-primary" style="width: 100%;">
                    </form>
                </div>
                <div class="clear"></div><br>

		    </div>

	    </div>

    </div><!-- /.row -->

</div>

@stop