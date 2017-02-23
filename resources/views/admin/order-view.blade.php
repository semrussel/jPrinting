@extends('template.admin')

@section('title') Jimbes Printing @stop

@section('content') 
    
<div class="col-md-10 col-md-offset-2 dash-main">

	<div class="row">
		<div class="col-xs-12">

			<p class="col-xs-12 dash-title"><b>Orders</b></p>

			<div class="col-xs-6">
				
				<div class="col-xs-4 right"><p><b>Order ID: </b></p></div>
			    <div class="col-xs-8 no-pad"><input value="{{ $order[0]->id }}" name="id" type="text" id="width" class="form-control" disabled></div>
			    <div class="clear"></div><br>

			    <div class="col-xs-4 right"><p><b>Product Type: </b></p></div>
			    <div class="col-xs-8 no-pad"><input value="{{ ucwords($order[0]->product) }}" name="product" type="text" id="width" class="form-control" disabled></div>
			    <div class="clear"></div><hr>

			    <!-- -- -->

			    <?php 
			    	$vpro = ucwords($order[0]->product);

			    	$vpaper = 0;
			    	if (preg_match('[invitations|business cards|tickets|posters|office forms|certificates|notebooks|flyers|borchures]', strtolower($vpro))) { $vpaper = 1; }

			    	$vcolor = 0;
			    	if (preg_match('[souvenir|receipt|notebooks]', strtolower($vpro))) { 
			    		$vcolor = 1; }

			    	$vcolorPly = 0;
			    	if (preg_match('[receipt]', strtolower($vpro))) { 
			    		$vcolorPly = 1; }
			    	
			    	$vlamination = 0;
			    	if (preg_match('[poster|business cards]', strtolower($vpro))) { 
			    		$vlamination = 1; }
			    	
			    	$vperforation = 0;
			    	if (preg_match('[tickets]', strtolower($vpro))) { 
			    		$vperforation = 1; }

			    	$vsubstrate = 0;
			    	if (preg_match('[stickers]', strtolower($vpro))) { 
			    		$vsubstrate = 1; }

			    	$vcorners = 0;
			    	if (preg_match('[business cards]', strtolower($vpro))) { 
			    		$vcorners = 1; }

			    ?>

			    <div class="col-xs-4 right"><p><b>
			    	<?php 
			    		if(preg_match('[notebooks]', strtolower($vpro))) { echo 'No of Sheets:'; }
			    		else { echo 'Size:'; } ?>
			    </b></p></div>
			    <div class="col-xs-8 no-pad"><input value="{{ $order[0]->size }}" name="size" type="text" id="width" class="form-control" disabled></div>
			    <div class="clear"></div><br>

			    @if($vpaper==1)
				    <div class="col-xs-4 right"><p><b> 
				    	<?php 
				    		if(preg_match('[notebooks]', strtolower($vpro))) { echo 'Inner Pages - Pages Type:'; } 
				    		else { echo 'Paper Type:'; } ?>
				    </b></p></div>
				    <div class="col-xs-8 no-pad"><input value="{{ $order[0]->paperType }}"  name="paperType" type="text" id="width" class="form-control" disabled></div>
				    <div class="clear"></div><br>
			    @endif

				@if($vcolor==1)
				    <div class="col-xs-4 right"><p><b>
				    	<?php 
				    		if(preg_match('[souvenir]', strtolower($vpro))) { echo 'Product:'; }
				    		else if(preg_match('[notebooks]', strtolower($vpro))) { echo 'Inner Pages - Printing:'; } 
				    		else { echo 'Color:'; } ?>
				    </b></p></div>
				    <div class="col-xs-8 no-pad"><input value="{{ $order[0]->color }}" name="color" type="text" id="width" class="form-control" disabled></div>
				    <div class="clear"></div><br>
				@endif

				@if($vcolorPly==1)
				    <div class="col-xs-4 right"><p><b>Color of Ply: </b></p></div>
				    <div class="col-xs-8 no-pad"><input value="{{ $order[0]->colorPly }}" name="colorPly" type="text" id="width" class="form-control" disabled></div>
				    <div class="clear"></div><br>
				@endif

			    @if($vlamination==1)
				    <div class="col-xs-4 right"><p><b>Lamination: </b></p></div>
				    <div class="col-xs-8 no-pad"><input value="{{ $order[0]->lamination }}" name="lamination" type="text" id="width" class="form-control" disabled></div>
				    <div class="clear"></div><br>
				@endif

			    @if($vperforation==1)
				    <div class="col-xs-4 right"><p><b>Perforation: </b></p></div>
				    <div class="col-xs-8 no-pad"><input value="{{ $order[0]->perforation }}" name="perforation" type="text" id="width" class="form-control" disabled></div>
				    <div class="clear"></div><br>
				@endif

			    @if($vsubstrate==1)
				    <div class="col-xs-4 right"><p><b>Substrate </b></p></div>
				    <div class="col-xs-8 no-pad"><input value="{{ $order[0]->substrate }}" name="substrate" type="text" id="width" class="form-control" disabled></div>
				    <div class="clear"></div><br>
				@endif

			    @if($vcorners==1)
				    <div class="col-xs-4 right"><p><b>Rounded Corners: </b></p></div>
				    <div class="col-xs-8 no-pad"><input value="{{ $order[0]->corner }}" name="corner" type="text" id="width" class="form-control" disabled></div>
				    <div class="clear"></div><br>
				@endif

			    <div class="col-xs-4 right"><p><b>Extras: </b></p></div>
			    <div class="col-xs-8 no-pad"><textarea name="description" class="form-control" rows="5" id="description" disabled>{{ $order[0]->description }}</textarea></div>
			    <div class="clear"></div><hr>

			    <!-- -- -->

				<div class="col-xs-4 right"><p><b>Quantity: </b></p></div>
			    <div class="col-xs-8 no-pad"><input value="{{ $order[0]->quantity }}" name="quantity" type="text" id="width" class="form-control" disabled></div>
			    <div class="clear"></div><br>
			    
			    <div class="col-xs-4 right"><p><b>Delivery Address: </b></p></div>
			    <div class="col-xs-8 no-pad"><textarea name="address" class="form-control" rows="3" id="delivery-address" disabled>{{ $order[0]->address }}</textarea></div>
			    <div class="clear"></div><hr>
			    
			    <!-- -- -->
			    <input type="hidden" value="{{ $order[0]->product }}" name="product">
			    @if($order[0]->price == 0)
			    <form action="{{ url('/sendPrice') }}" method="POST">
				    <div class="col-xs-4 right"><p><b>Price: </b></p></div>
				    <div class="col-xs-8 no-pad"><input value="{{ $order[0]->estimated_price }}" name="price" type="number" id="price" class="form-control" required></div>
				    <input type="hidden" value="{{ $order[0]->id }}" name="id">
				    <div class="clear"></div><br>

				    <div class="col-xs-4 right"><p><b>Expected Date: </b></p></div>
				    <div class="col-xs-8 no-pad"><input name="date" type="date" id="date" class="form-control" required></div>
				    <div class="clear"></div><br>
				    
				    <div class="col-xs-4 col-xs-offset-8 no-pad"><input type="submit" class="btn btn-primary" id="submitRequest" name="submit" value='Submit' style="width: 100%;"></div>
				    <div class="clear"></div><br>
	    		</form>
	    		@else
	    			<div class="col-xs-4 right"><p><b>Price: </b></p></div>
				    <div class="col-xs-8 no-pad"><input name="price" disabled type="text" id="width" class="form-control" required value="{{ $order[0]->price }}"></div>
				    
				    <div class="clear"></div><br>
				    <div class="col-xs-4 right"><p><b>Expected Date: </b></p></div>
				    <div class="col-xs-8 no-pad"><input disabled name="date" value="{{ $order[0]->expected_delivery }}" type="date" id="date" class="form-control" required></div>
				    <div class="clear"></div><br>
	    		@endif

		    	@if($order[0]->status == 'Validating Payment')
		    		<div class="col-xs-4 col-xs-offset-8 no-pad">
	                	<form action="{{ url('/confirm-payment') }}" method="POST">
	                        <input type="hidden" name="id" value="{{ $order[0]->id }}"> 
	                        <input type="submit" value="Validate Payment" class="btn btn-primary" style="width: 100%;">
	                    </form>
                    </div>
                    <div class="clear"></div><br>
                @endif

                @if($order[0]->status == 'Processing the Product')
                <div class="col-xs-4 col-xs-offset-8 no-pad">
                	<form action="{{ url('/process-order') }}" method="POST">
                        <input type="hidden" name="id" value="{{ $order[0]->id }}"> 
                        <input type="submit" value="Ready for Delivery" class="btn btn-primary" style="width: 100%;">
                    </form>
                </div>
                <div class="clear"></div><br>
                @endif

                @if($order[0]->status == 'Ready for Delivery')
                <div class="col-xs-4 col-xs-offset-8 no-pad">
                	<form action="{{ url('/deliver-order') }}" method="POST">
                        <input type="hidden" name="id" value="{{ $order[0]->id }}"> 
                        <input type="submit" value="Delivered" class="btn btn-primary" style="width: 100%;">
                    </form>
                </div>
                <div class="clear"></div><br>
                @endif



    		</div>

    		<div class="col-xs-6">
    			<div class="col-xs-4 right"><p><b>Transaction ID: </b></p></div>
			    <div class="col-xs-8 no-pad"><input  @if($order[0]->transaction_number != 'NONE') value="{{ $order[0]->transaction_number }}"  disabled @else value="" @endif name="transaction" type="text" id="width" class="form-control" disabled></div>
			    <div class="clear"></div><br>

			    <div class="col-xs-4 right"><p><b>Bank: </b></p></div>
			    <div class="col-xs-8 no-pad"><input @if($order[0]->bank != 'NONE') value="{{ $order[0]->bank }}"  disabled @else value="" @endif name="bank" type="text" id="width" class="form-control" disabled></div>
			    <div class="clear"></div><hr>

		    	<div class="col-xs-12"><p><b>Design: </b></p></div>
		    	@if($order[0]->designType == 'Browse')
		    		<img class="col-xs-12" src="{{ url($order[0]->design) }}">
		    	@else
		    		<img class="col-xs-12" src="{{ $order[0]->file }}">
		    	@endif
			</div>

	    </div>

    </div><!-- /.row -->

</div>

@stop