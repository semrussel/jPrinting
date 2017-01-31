@extends('template.admin')

@section('title') Jimbes Printing @stop

@section('content')

<div class="col-md-10 col-md-offset-2 dash-main">

	<div class="row">
		<div class="col-xs-12">

			<p class="col-xs-12 dash-title"><b>Inventory</b> | Tag Material
		<form id="mainprod-add" action="{{ url('/create-material') }}" method="POST" enctype="multipart/form-data">
			<div class="col-xs-6">
				<div class="col-xs-12">

					<div class="col-xs-4"><p><b>Product:</b></p></div>
					<div class="col-xs-8" id="hassub-group">
					    <div class="col-xs-6"><input type="radio" name="has" checked="checked" value="1"/> Main Product</div>
					    <div class="col-xs-6"><input type="radio" name="has" value="0"/> Sub Product</div>
					</div>
				    <div class="clear"></div><br>

				    <div id="has1" class="desc">
				    	<div class="col-xs-12"><p><b>Main Products: </b></p></div>
					    <div class="col-xs-12 no-pad"><input value="" name="12" type="text" id="p-mainpro" class="form-control"></div>
					    <div class="clear"></div>
					    <div id="div-mainpro"></div>
						<div class="clear"></div><br>
				    </div>

				    <div id="has0" class="desc" style="display:none">
				    	<div class="col-xs-12"><p><b>Sub Products: </b></p></div>
					    <div class="col-xs-12 no-pad"><input value="" name="12" type="text" id="p-subpro" class="form-control"></div>
					    <div class="clear"></div>
					    <div id="div-subpro"></div>
						<div class="clear"></div><br>
				    </div>

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