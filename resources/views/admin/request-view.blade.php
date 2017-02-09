@extends('template.admin')

@section('title') Jimbes Printing @stop

@section('content') 
    
<div class="col-md-10 col-md-offset-2 dash-main">

	<div class="row">
		<div class="col-xs-12">

			<p class="col-xs-12 dash-title"><b>Requests</b></p>

			<div class="col-xs-6">

				<div class="col-xs-4 right"><p><b>Quote Title: </b></p></div>
			    <div class="col-xs-8 no-pad"><input name="title" value="{{ $request[0]->title }}" type="text" id="width" class="form-control" disabled></div>
			    <div class="clear"></div><br>

			    <div class="col-xs-4 right"><p><b>Quote Type: </b></p></div>
			    <div class="col-xs-8 no-pad"><input name="type" value="{{ $request[0]->type }}" type="text" id="width" class="form-control" disabled></div>
			    <div class="clear"></div><hr>

			    <!-- -- -->

			    <?php 
			    	$vpro = ucwords($request[0]->product);

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
			    <div class="col-xs-8 no-pad"><input value="{{ $request[0]->size }}" name="size" type="text" id="width" class="form-control" disabled></div>
			    <div class="clear"></div><br>

			    @if($vpaper==1)
				    <div class="col-xs-4 right"><p><b> 
				    	<?php 
				    		if(preg_match('[notebooks]', strtolower($vpro))) { echo 'Inner Pages - Pages Type:'; } 
				    		else { echo 'Paper Type:'; } ?>
				    </b></p></div>
				    <div class="col-xs-8 no-pad"><input value="{{ $request[0]->paper_stock }}" name="paperType" type="text" id="width" class="form-control" disabled></div>
				    <div class="clear"></div><br>
			    @endif

				<!-- @if($vcolor==1)
				    <div class="col-xs-4 right"><p><b>
				    	<?php 
				    		if(preg_match('[souvenir]', strtolower($vpro))) { echo 'Product:'; }
				    		else if(preg_match('[notebooks]', strtolower($vpro))) { echo 'Inner Pages - Printing:'; } 
				    		else { echo 'Color:'; } ?>
				    </b></p></div>
				    <div class="col-xs-8 no-pad"><input name="color" type="text" id="width" class="form-control" disabled></div>
				    <div class="clear"></div><br>
				@endif

				@if($vcolorPly==1)
				    <div class="col-xs-4 right"><p><b>Color of Ply: </b></p></div>
				    <div class="col-xs-8 no-pad"><input name="colorPly" type="text" id="width" class="form-control" disabled></div>
				    <div class="clear"></div><br>
				@endif -->

			    @if($vlamination==1)
				    <div class="col-xs-4 right"><p><b>Lamination: </b></p></div>
				    <div class="col-xs-8 no-pad"><input value="{{ $request[0]->lamination }}" name="lamination" type="text" id="width" class="form-control" disabled></div>
				    <div class="clear"></div><br>
				@endif

			    <!-- @if($vperforation==1)
				    <div class="col-xs-4 right"><p><b>Perforation: </b></p></div>
				    <div class="col-xs-8 no-pad"><input name="perforation" type="text" id="width" class="form-control" disabled></div>
				    <div class="clear"></div><br>
				@endif -->

			   <!--  @if($vsubstrate==1)
				    <div class="col-xs-4 right"><p><b>Substrate </b></p></div>
				    <div class="col-xs-8 no-pad"><input name="substrate" type="text" id="width" class="form-control" disabled></div>
				    <div class="clear"></div><br>
				@endif -->

			    <!-- @if($vcorners==1)
				    <div class="col-xs-4 right"><p><b>Rounded Corners: </b></p></div>
				    <div class="col-xs-8 no-pad"><input name="corner" type="text" id="width" class="form-control" disabled></div>
				    <div class="clear"></div><br>
				@endif -->

			    <div class="col-xs-4 right"><p><b>Extras: </b></p></div>
			    <div class="col-xs-8 no-pad"><textarea name="description" class="form-control" rows="5" id="description" disabled>{{ $request[0]->details }}</textarea></div>
			    <div class="clear"></div><hr>

			    <!-- -- -->

				<div class="col-xs-4 right"><p><b>Quantity: </b></p></div>
			    <div class="col-xs-8 no-pad"><input value="{{ $request[0]->quantity }}" name="quantity" type="text" id="width" class="form-control" disabled></div>
			    <div class="clear"></div><hr>
			    
			    <!-- -- -->

			    @if($request[0]->price == 0)
			    <form action="{{ url('/sendQPrice') }}" method="POST">
				    <div class="col-xs-4 right"><p><b>Price: </b></p></div>
				    <div class="col-xs-8 no-pad"><input name="price" type="number" id="width" class="form-control" required></div>
				    <input type="hidden" value="{{ $request[0]->id }}" name="id">
				    <div class="clear"></div><br>

				    
				    <div class="col-xs-4 col-xs-offset-8 no-pad"><input type="submit" class="btn btn-primary" id="submitRequest" name="submit" value='Send Price' style="width: 100%;"></div>
				    <div class="clear"></div><br>
	    		</form>
	    		@else
	    			<div class="col-xs-4 right"><p><b>Price: </b></p></div>
				    <div class="col-xs-8 no-pad"><input name="price" disabled type="text" id="width" class="form-control" required value="{{ $request[0]->price }}"></div>
				    
				    <div class="clear"></div><br>
	    		@endif
	    
    		</div>

    		<div class="col-xs-6">
		    	<div class="col-xs-4 right"><p><b>Full Name: </b></p></div>
			    <div class="col-xs-8 no-pad"><input value="{{ $request[0]->fullname }}" name="name" type="text" id="width" class="form-control" disabled></div>
			    <div class="clear"></div><br>

			    <div class="col-xs-4 right"><p><b>Email Address: </b></p></div>
			    <div class="col-xs-8 no-pad"><input value="{{ $request[0]->email }}" name="email" type="text" id="width" class="form-control" disabled></div>
			    <div class="clear"></div><hr>

			    <div class="col-xs-12"><p><b>Design: </b></p></div>
		    	<img class="col-xs-12" src="/img/bl-shirt-01.jpg">
		    	<div class="clear"></div><br>
			</div>

	    </div>

    </div><!-- /.row -->

</div>

@stop