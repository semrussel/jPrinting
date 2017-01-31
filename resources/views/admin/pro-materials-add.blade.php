@extends('template.admin')

@section('title') Jimbes Printing @stop

@section('content')

<div class="col-md-10 col-md-offset-2 dash-main">

	<div class="row">
		<div class="col-xs-12">

			<p class="col-xs-12 dash-title"><b>Products</b> | Add New Material
		<form id="mainprod-add" action="{{ url('/create-mainprod') }}" method="POST" enctype="multipart/form-data">
			<div class="col-xs-6">
				<div class="col-xs-12">
			        <div class="col-xs-12"><p><b>Product Name: </b></p></div>
				    <div class="col-xs-12 no-pad"><input value="" name="name" type="text" id="width" class="form-control" required></div>
					<div class="clear"></div><br>


			        <div class="col-xs-12"><p><b>Pieces: </b></p></div>
				    <div class="col-xs-12 no-pad"><input value="" name="pieces" type="number" id="width" class="form-control" required></div>
					<div class="clear"></div><br>


			        <div class="col-xs-12"><p><b>Quantity: </b></p></div>
				    <div class="col-xs-12 no-pad"><input value="" name="quantity" type="number" id="width" class="form-control" required></div>
					<div class="clear"></div><br>

				    </div>
				    <div class="col-xs-4 col-xs-offset-8 no-pad">
		                        <input type="submit" value="Submit" class="btn btn-primary" style="width: 100%;">
	                </div>
				    <!-- <div id="has2" class="desc" style="display: none;">
				    </div> -->
				    

				
    			</div>
    		</div>
	    </form>
    	<div>
    </div><!-- /.row -->

</div>

@stop