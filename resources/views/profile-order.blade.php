@extends('template.main')

@section('title') Jimbes Printing @stop

@section('content') 

<div class="inner-pad"></div>

<!-- Page Content -->
<div class="container">

    <!-- Services -->
    <div class="row">
        <div class="col-md-3">
            @include('inc/sidebar')
        </div>
        <h3 class="serv-main-title col-md-offset-3"><b>User Profile</b> | Order</h3>
        <div class="col-md-9 serv-main-box">

        	<div class="clear"></div><br>
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
			    	if (preg_match('[invitations|business cards|tickets|posters|office forms|certificates|receipts|notebooks|flyers|borchures]', strtolower($vpro))) { $vpaper = 1; }

			    	$vcolor = 0;
			    	if (preg_match('[souvenir|receipts|notebooks]', strtolower($vpro))) { 
			    		$vcolor = 1; }

			    	$vcolorPly = 0;
			    	if (preg_match('[receipts]', strtolower($vpro))) { 
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
			    		if(preg_match('[notebooks]', $vpro)) { echo 'No of Sheets:'; }
			    		else { echo 'Size:'; } ?>
			    </b></p></div>
			    <div class="col-xs-8 no-pad"><input value="{{ $order[0]->size }}" name="size" type="text" id="width" class="form-control" disabled></div>
			    <div class="clear"></div><br>

			    @if($vpaper==1)
				    <div class="col-xs-4 right"><p><b> 
				    	<?php 
				    		if(preg_match('[notebooks]', $vpro)) { echo 'Inner Pages - Pages Type:'; } 
				    		else { echo 'Paper Type:'; } ?>
				    </b></p></div>
				    <div class="col-xs-8 no-pad"><input value="{{ $order[0]->paperType }}"  name="paperType" type="text" id="width" class="form-control" disabled></div>
				    <div class="clear"></div><br>
			    @endif

				@if($vcolor==1)
				    <div class="col-xs-4 right"><p><b>
				    	<?php 
				    		if(preg_match('[souvenir]', $vpro)) { echo 'Product:'; }
				    		else if(preg_match('[notebooks]', $vpro)) { echo 'Inner Pages - Printing:'; } 
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
			    <input type="hidden" value="brochures | bi-fold" name="product">
			    
				    <div class="col-xs-4 right"><p><b>Price: </b></p></div>
				    <div class="col-xs-8 no-pad"><input name="price" type="text" id="width" class="form-control" disabled value="{{ $order[0]->price }}"></div>
				    
				    <div class="clear"></div><br>

				   <form method="POST" action="{{ url('/sendTrans') }}"> 
				    <div class="col-xs-4 col-xs-offset-8 no-pad"><input @if($order[0]->price == 0)  disabled @endif type="submit" class="btn btn-primary" id="submitRequest" name="submit" value='Submit' style="width: 100%;"></div>
				    <div class="clear"></div><br>
	    		
    		</div>

    		<div class="col-xs-6">
    			
	    			<div class="col-xs-4 right"><p><b>Transaction ID: </b></p></div>
				    <div class="col-xs-8 no-pad"><input @if($order[0]->transaction_number != 'NONE') value="{{ $order[0]->transaction_number }}"  disabled @else value="" @endif @if($order[0]->price == 0)  disabled @endif name="transaction" type="text" id="width" class="form-control" required></div>
				    <div class="clear"></div><br>
				    <input type="hidden" value="{{ $order[0]->id }}" name="id">
				    <div class="col-xs-4 right"><p><b>Bank: </b></p></div>
				    <div class="col-xs-8 no-pad"><input @if($order[0]->bank != 'NONE') value="{{ $order[0]->bank }}"  disabled @else value="" @endif name="bank" @if($order[0]->price == 0)  disabled @endif type="text" id="width" class="form-control" required></div>
				    <div class="clear"></div><hr>
				</form>

		    	<div class="col-xs-12"><p><b>Design: </b></p></div>
		    	@if($order[0]->designType == 'Browse')
		    		<img class="col-xs-12" src="{{ url('img/'.$order[0]->product.'/des-'.$order[0]->design.'.jpg') }}">
		    	@else
		    		<img class="col-xs-12" src="{{ $order[0]->file }}">
		    	@endif
			</div>

        </div>
    </div>
    <!-- /.row -->

</div>
@stop