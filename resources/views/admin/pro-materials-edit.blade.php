@extends('template.admin')

@section('title') Jimbes Printing @stop

@section('content')

<div class="col-md-10 col-md-offset-2 dash-main">

	<div class="row">
		<div class="col-xs-12">

			<p class="col-xs-12 dash-title"><b>Inventory</b> | Edit Material
		<form id="mainprod-add" action="{{ url('/edit-material') }}" method="POST" enctype="multipart/form-data">
			<div class="col-xs-6">
				<div class="col-xs-12">

			        <div class="col-xs-12"><p><b>Reference No: </b></p></div>
				    <div class="col-xs-12 no-pad"><input value="{{ $material->reference_num }}" name="refno" type="text" id="width" class="form-control" required></div>
					<div class="clear"></div><br>

			        <div class="col-xs-12"><p><b>Product Name: </b></p></div>
				    <div class="col-xs-12 no-pad"><input value="{{ $material->name }}" name="name" type="text" id="width" class="form-control" required></div>
					<div class="clear"></div><br>

			        <div class="col-xs-12"><p><b>Quantity/Pieces: </b></p></div>
				    <div class="col-xs-12 no-pad"><input value="{{ $material->quantity }}" name="quantity" type="number" id="width" class="form-control" required></div>
					<div class="clear"></div><br>

				    </div>
				    <div class="col-xs-4 col-xs-offset-8 no-pad">
				    	<input type="hidden" name="id" value="{{ $material->id }}">
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