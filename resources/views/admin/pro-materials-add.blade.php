@extends('template.admin')

@section('title') Jimbes Printing @stop

@section('content')

<div class="col-md-10 col-md-offset-2 dash-main">

	<div class="row">
		<div class="col-xs-12">

			<p class="col-xs-12 dash-title"><b>Inventory</b> | Add New Material</p>
			<form id="mainprod-add" action="{{ url('/create-material') }}" method="POST" enctype="multipart/form-data">
				<div class="col-xs-6">
					<div class="col-xs-12">
						
				        <div class="col-xs-12"><p><b>Reference No: </b></p></div>
					    <div class="col-xs-12 no-pad"><input value="" name="refno" type="text" id="refno" class="form-control" required></div>
						<div class="clear"></div><br>

						<div class="col-xs-12"><p><b>Received By: </b></p></div>
					    <div class="col-xs-12 no-pad"><input value="" name="revby" type="text" id="revby" class="form-control" required></div>
						<div class="clear"></div><br>

						<div id="material-rows">
							<div class="row">
								<div class="col-sm-6">
							        <div class="col-xs-12"><p><b>Product Name: </b></p></div>
								    <div class="col-xs-12 no-pad"><input value="" name="name-1" type="text" id="name-1" class="form-control" required></div>
							    </div>
								<div class="col-sm-5">
							        <div class="col-xs-12"><p><b>Quantity/Pieces: </b></p></div>
								    <div class="col-xs-12 no-pad"><input value="" name="quantity-1" type="number" id="quantity-1" class="form-control" required></div>
								</div>
							</div>
							<div class="clear"></div><br>
						</div>

    					<input type="hidden" value="1" name="matrow-count" id="matrow-count">
					    <div class="col-xs-4 col-xs-offset-8 no-pad">
			                        <input type="submit" value="Submit" class="btn btn-primary" style="width: 100%;">
		                </div>
					    <!-- <div id="has2" class="desc" style="display: none;">
					    </div> -->
					    
	    			</div>
	    		</div>    		
		    </form>
    		<div class="col-xs-6">
    			<div class="col-xs-4 no-pad">
                    <button id="add-material" class="add-button" style="width: 100%; border: 0; margin-top: 30px;"><i class="fa fa-plus" aria-hidden="true"></i> Add Material</button>
                </div>
            </div>
        </div>  
    </div><!-- /.row -->

</div>
@stop