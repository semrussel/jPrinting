@extends('template.admin')

@section('title') Jimbes Printing @stop

@section('content')

<div class="col-md-10 col-md-offset-2 dash-main">

	<div class="row">
		<div class="col-xs-12">

			<p class="col-xs-12 dash-title"><b>Design</b> | Add New Design
		<form id="design-add" action="{{ url('/create-design') }}" method="POST" enctype="multipart/form-data">
			<div class="col-xs-6">
				<div class="col-xs-12">

					<div class="col-xs-6"><p><b>Product:</b></p>
						<div id="hassub-group">
						    <div class="col-xs-6"><input type="radio" name="has" checked="checked" value="1"/> Main Product</div>
						    <div class="col-xs-6"><input type="radio" name="has" value="0"/> Sub Product</div>
						</div>
					</div>

				    <div class="col-xs-6">
					    <div id="has1" class="desc">
					    	<select class="form-control" id="main-prod" name="main-prod" style="margin:35px 0;">
								@foreach($mainprod as $mp)
							        <option value="{{ $mp->id }}">{{ $mp->name }}</option>
					            @endforeach
					        </select>
					    </div>
					    <div id="has0" class="desc" style="display:none">
					    	<select class="form-control" id="sub-prod" name="sub-prod" style="margin:35px 0;">
								@foreach($subprod as $sp)
					        		<option value="{{ $sp->id }}">{{ $sp->name }}</option>
					            @endforeach
					        </select>
					    </div>
	                </div>

				    <div class="clear"></div><hr>
				    <div class="col-xs-4 col-xs-offset-8 no-pad">
		                        <input type="submit" value="Submit" class="btn btn-primary" style="width: 100%;">
	                </div>
				    <!-- <div id="has2" class="desc" style="display: none;">
				    </div> -->
				    

				
    			</div>
    		</div>
			<div class="col-xs-6">
		    	<div class="col-xs-12"><p><b>Design Image: </b> <input class="btn btn-primary" type="file" name="pic" accept="image/*" required> </p></div>
	    		<img class="col-xs-12" src="{{ url('img/bl-shirt-01.jpg') }}">

	    	</div>
	    </form>
    	<div>
    </div><!-- /.row -->

</div>

@stop