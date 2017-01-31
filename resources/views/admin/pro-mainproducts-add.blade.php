@extends('template.admin')

@section('title') Jimbes Printing @stop

@section('content')

<div class="col-md-10 col-md-offset-2 dash-main">

	<div class="row">
		<div class="col-xs-12">

			<p class="col-xs-12 dash-title"><b>Products</b> | Add New Main Product

			<div class="col-xs-6">
				<div class="col-xs-12">
			        <div class="col-xs-12"><p><b>Product Name: </b></p></div>
				    <div class="col-xs-12 no-pad"><input value="" name="product" type="text" id="width" class="form-control" required></div>
					<div class="clear"></div><br>

				    <div class="col-xs-12"><p><b>Sizes: </b></p></div>
				    <div class="col-xs-12 no-pad"><input value="" name="12" type="text" id="width" class="form-control"></div>
					<div class="clear"></div><br>

				    <div class="col-xs-12"><p><b>Additional Details: </b></p></div>
				    <div class="col-xs-12 no-pad"><textarea name="description" class="form-control" rows="5" id="description" required="">Extra:</textarea></div>
				    <div class="clear"></div><br>

					<div class="col-xs-12"><p><b>Other Options: </b></p></div>
				    <div class="col-xs-4">
						<div class="checkbox">
		  					<label><input type="checkbox" value="">Paper Type</label>
						</div>

						<div class="checkbox">
		  					<label><input type="checkbox" value="">Color</label>
						</div>

						<div class="checkbox">
		  					<label><input type="checkbox" value="">Color Ply</label>
						</div>
					</div>
					<div class="col-xs-4">
						<div class="checkbox">
		  					<label><input type="checkbox" value="">Lamination</label>
						</div>

						<div class="checkbox">
		  					<label><input type="checkbox" value="">Perforation</label>
						</div>
					</div>
					<div class="col-xs-4">
						<div class="checkbox">
		  					<label><input type="checkbox" value="">Substrate</label>
						</div>

						<div class="checkbox">
		  					<label><input type="checkbox" value="">Corners</label>
						</div>
					</div>

				    <div class="clear"></div><hr>
    			</div>
    		</div>
			<div class="col-xs-6">
		    	<div class="col-xs-12"><p><b>Product Image: </b> <input class="btn btn-primary" type="file" name="pic" accept="image/*"> </p></div>
	    		<img class="col-xs-12" src="{{ url('img/bl-shirt-01.jpg') }}">

	    	</div>
    	<div>
    </div><!-- /.row -->

</div>

@stop