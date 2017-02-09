@extends('template.admin')

@section('title') Jimbes Printing @stop

@section('content')

<div class="col-md-10 col-md-offset-2 dash-main">

	<div class="row">
		<div class="col-xs-12">

			<p class="col-xs-12 dash-title"><b>Products</b> | Add New Main Product
		<form id="mainprod-add" action="{{ url('/create-mainprod') }}" method="POST" enctype="multipart/form-data">
			<div class="col-xs-6">
				<div class="col-xs-12">
			        <div class="col-xs-12"><p><b>Product Name: </b></p></div>
				    <div class="col-xs-12 no-pad"><input value="" name="name" type="text" id="width" class="form-control" required></div>
					<div class="clear"></div><br>

					<div class="col-xs-4"><p><b>Has Sub Products:</b></p></div>
					<div class="col-xs-8" id="hassub-group">
					    <div class="col-xs-6"><input type="radio" name="has" checked="checked" value="1"/> With</div>
					    <div class="col-xs-6"><input type="radio" name="has" value="0"/> Without</div>
					</div>
				    <div class="clear"></div><br>

				    <div id="has0" class="desc" style="display:none">

				    	<div class="col-xs-12"><p><b>Sizes: </b></p></div>
					    <div class="col-xs-12 no-pad"><input value="" name="12" type="text" id="p-size" class="form-control"></div>
					    <div class="clear"></div>
					    <div id="div-size"></div>
						<div class="clear"></div><br>

					    <div class="col-xs-12"><p><b>Additional Details: </b></p></div>
					    <div class="col-xs-12 no-pad"><textarea name="description" class="form-control" rows="5" id="description" required="">Extra:</textarea></div>
					    <div class="clear"></div><br>

						<div class="col-xs-4"><p><b>Other Options: </b></p></div>

						<div class="col-xs-8 checkbox">
					    	<div class="col-xs-6">
			  					<label><input id="opt-paper" name="input[]" type="checkbox" value="Paper Type">Paper Type</label>
			  					<br><label><input id="opt-color" name="input[]" type="checkbox" value="Color">Color</label>
			  					<br><label><input id="opt-colorply" name="input[]" type="checkbox" value="Color Ply">Color Ply</label>
							</div>
							<div class="col-xs-6">
			  					<label><input id="opt-lamination" name="input[]" type="checkbox" value="Lamination">Lamination</label>
			  					<br><label><input id="opt-perforation" name="input[]" type="checkbox" value="Perforation">Perforation</label>
			  					<br><label><input id="opt-substrate" name="input[]" type="checkbox" value="Substrate">Substrate</label>
			  					<br><label><input id="opt-corner" name="input[]" type="checkbox" value="Corners">Corners</label>
							</div>
						</div>

					    <div class="clear"></div><hr>

					    <div id="sec-paper" hidden>
						    <div class="col-xs-4"><p><b>Paper Types: </b></p></div>
						    <div class="col-xs-12 no-pad"><input value="" name="12" type="text" id="p-paper" class="form-control"></div>
						    <div class="clear"></div>
						    <div id="div-paper"></div>
						    <div class="clear"></div><hr>
					    </div>

					    <div id="sec-color" hidden>
						    <div class="col-xs-4"><p><b>Color: </b></p></div>
						    <div class="col-xs-12 no-pad"><input value="" name="12" type="text" id="p-color" class="form-control"></div>
						    <div class="clear"></div>
						    <div id="div-color"></div>
						    <div class="clear"></div><hr>
					    </div>

					    <div id="sec-colorply" hidden>
							<div class="col-xs-12"><p><b>Color Ply: </b></p></div>
						    <div class="col-xs-12 no-pad"><input value="" name="12" type="text" id="p-colorply" class="form-control"></div>
						    <div class="clear"></div>
						    <div id="div-colorply"></div>
						    <div class="clear"></div><hr>
					    </div>

					    
	                    <div class="clear"></div><br>

				    </div>
				    <div class="col-xs-4 col-xs-offset-8 no-pad">
		                        <input type="submit" value="Submit" class="btn btn-primary" style="width: 100%;">
	                </div>
				    <!-- <div id="has2" class="desc" style="display: none;">
				    </div> -->
				    

				
    			</div>
    		</div>
			<div class="col-xs-6">
		    	<div class="col-xs-12"><p><b>Product Image: </b> <input class="btn btn-primary" type="file" name="pic" accept="image/*"> </p></div>
	    		<img class="col-xs-12" src="{{ url('img/bl-shirt-01.jpg') }}">

	    	</div>
	    </form>
    	<div>
    </div><!-- /.row -->

</div>

@stop