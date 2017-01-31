@extends('template.admin')

@section('title') Jimbes Printing @stop

@section('content')

<div class="col-md-10 col-md-offset-2 dash-main">

	<div class="row">
		<div class="col-xs-12">

			<p class="col-xs-12 dash-title"><b>Products</b> | Add New Sub Product

			<div class="col-xs-6">
				<div class="col-xs-12">
					<div class="col-xs-12"><p><b>Main Product:</b></p></div>
				    <div class="col-xs-12 no-pad">
					    <select class="form-control" id="mainproduct" name="mainproduct">
					        <option>opt1</option>
					        <option>opt2</option>
					    </select>
				    </div>
				    <div class="clear"></div><br>

			        <div class="col-xs-12"><p><b>Product Name: </b></p></div>
				    <div class="col-xs-12 no-pad"><input value="" name="product" type="text" id="width" class="form-control" required></div>
					<div class="clear"></div><br>

				    <div class="col-xs-12"><p><b>Sizes: </b></p></div>
				    <div class="col-xs-12 no-pad"><input value="" name="12" type="text" id="p-size" class="form-control"></div>
				    <div id="div-size"></div>
					<div class="clear"></div><br>

				    <div class="col-xs-12"><p><b>Additional Details: </b></p></div>
				    <div class="col-xs-12 no-pad"><textarea name="description" class="form-control" rows="5" id="description" required="">Extra:</textarea></div>
				    <div class="clear"></div><br>

					<div class="col-xs-4"><p><b>Other Options: </b></p></div>

					<div class="col-xs-8 checkbox">
				    	<div class="col-xs-6">
		  					<label><input id="opt-paper" type="checkbox" value="">Paper Type</label>
		  					<br><label><input id="opt-color" type="checkbox" value="">Color</label>
		  					<br><label><input id="opt-colorply" type="checkbox" value="">Color Ply</label>
						</div>
						<div class="col-xs-6">
		  					<label><input id="opt-lamination" type="checkbox" value="">Lamination</label>
		  					<br><label><input id="opt-perforation" type="checkbox" value="">Perforation</label>
		  					<br><label><input id="opt-substrate" type="checkbox" value="">Substrate</label>
		  					<br><label><input id="opt-corner" type="checkbox" value="">Corners</label>
						</div>
					</div>

				    <div class="clear"></div><hr>

				    <div id="sec-paper" hidden>
					    <div class="col-xs-4"><p><b>Paper Types: </b></p></div>
					    <div class="col-xs-12 no-pad"><input value="" name="12" type="text" id="p-paper" class="form-control"></div>
					    <div id="div-paper"></div>
					    <div class="clear"></div><hr>
				    </div>

				    <!-- <div id="sec-color" hidden>
						<div class="col-xs-4"><p style="margin:8px;"><b>Colors: </b></p></div>
					    <div class="col-xs-8 checkbox">
					    	<div class="col-xs-6">
			  					<label><input type="checkbox" value="">Colored</label>
			  					<br><label><input type="checkbox" value="">Colored 15%</label>
							</div>
							<div class="col-xs-6">
			  					<label><input type="checkbox" value="">Black & White</label>
							</div>
						</div>
					    <div class="clear"></div><hr>
				    </div> -->

				    <div id="sec-colorply" hidden>
						<div class="col-xs-12"><p><b>Color Ply: </b></p></div>
					    <div class="col-xs-12 no-pad"><input value="" name="12" type="text" id="p-colorply" class="form-control"></div>
					    <div id="div-colorply"></div>
					    <div class="clear"></div><hr>
				    </div>

				    <div class="col-xs-4 col-xs-offset-8 no-pad">
	                	<form action="" method="POST">
	                        <input type="hidden" name="id" value=""> 
	                        <input type="submit" value="Submit" class="btn btn-primary" style="width: 100%;">
	                    </form>
                    </div>
                    <div class="clear"></div><br>
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