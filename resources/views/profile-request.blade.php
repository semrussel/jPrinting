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
        <h3 class="serv-main-title col-md-offset-3"><b>User Profile</b> | Request for Quote</h3>
        <div class="col-md-9 serv-main-box">

        	<div class="clear"></div><br>
            <div class="col-xs-6">

				<div class="col-xs-4 right"><p><b>Quote Title: </b></p></div>
			    <div class="col-xs-8 no-pad"><input value="{{ $quote[0]->title }}" name="title" type="text" id="width" class="form-control" disabled></div>
			    <div class="clear"></div><br>

			    <div class="col-xs-4 right"><p><b>Quote Type: </b></p></div>
			    <div class="col-xs-8 no-pad"><input value="{{ $quote[0]->type }}" name="type" type="text" id="width" class="form-control" disabled></div>
			    <div class="clear"></div><hr>

			    <!-- -- -->

			    <?php 
			    	$vpro = ucwords($quote[0]->product);

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
			    <div class="col-xs-8 no-pad"><input value="{{ $quote[0]->size }}" name="size" type="text" id="width" class="form-control" disabled></div>
			    <div class="clear"></div><br>

			    @if($vpaper==1)
				    <div class="col-xs-4 right"><p><b> 
				    	<?php 
				    		if(preg_match('[notebooks]', strtolower($vpro))) { echo 'Inner Pages - Pages Type:'; } 
				    		else { echo 'Paper Type:'; } ?>
				    </b></p></div>
				    <div class="col-xs-8 no-pad"><input value="{{ $quote[0]->paper_stock }}" name="paperType" type="text" id="width" class="form-control" disabled></div>
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
				@endif -->

				<!-- @if($vcolorPly==1)
				    <div class="col-xs-4 right"><p><b>Color of Ply: </b></p></div>
				    <div class="col-xs-8 no-pad"><input name="colorPly" type="text" id="width" class="form-control" disabled></div>
				    <div class="clear"></div><br>
				@endif -->

			    @if($vlamination==1)
				    <div class="col-xs-4 right"><p><b>Lamination: </b></p></div>
				    <div class="col-xs-8 no-pad"><input value="{{ $quote[0]->lamination }}" name="lamination" type="text" id="width" class="form-control" disabled></div>
				    <div class="clear"></div><br>
				@endif

			    <!-- @if($vperforation==1)
				    <div class="col-xs-4 right"><p><b>Perforation: </b></p></div>
				    <div class="col-xs-8 no-pad"><input name="perforation" type="text" id="width" class="form-control" disabled></div>
				    <div class="clear"></div><br>
				@endif

			    @if($vsubstrate==1)
				    <div class="col-xs-4 right"><p><b>Substrate </b></p></div>
				    <div class="col-xs-8 no-pad"><input name="substrate" type="text" id="width" class="form-control" disabled></div>
				    <div class="clear"></div><br>
				@endif

			    @if($vcorners==1)
				    <div class="col-xs-4 right"><p><b>Rounded Corners: </b></p></div>
				    <div class="col-xs-8 no-pad"><input name="corner" type="text" id="width" class="form-control" disabled></div>
				    <div class="clear"></div><br>
				@endif -->

			    <div class="col-xs-4 right"><p><b>Extras: </b></p></div>
			    <div class="col-xs-8 no-pad"><textarea name="description" class="form-control" rows="5" id="description" disabled>{{ $quote[0]->details }}</textarea></div>
			    <div class="clear"></div><hr>

			    <!-- -- -->

				<div class="col-xs-4 right"><p><b>Quantity: </b></p></div>
			    <div class="col-xs-8 no-pad"><input value="{{ $quote[0]->quantity }}" name="quantity" type="text" id="width" class="form-control" disabled></div>
			    <div class="clear"></div><hr>
			    
			    <!-- -- -->

			    <div class="col-xs-4 right"><p><b>Price: </b></p></div>
			    <div class="col-xs-8 no-pad"><input value="{{ $quote[0]->price }}" name="price" type="text" id="width" class="form-control" disabled></div>
			    <div class="clear"></div><br>

			    <input type="hidden" value="{{ $quote[0]->product }}" name="product">
			    <div class="col-xs-4 col-xs-offset-8 no-pad"><a href="{{ url('/profile') }}" class="btn btn-primary" id="submitRequest" name="submit" style="width: 100%;">Back</a></div>
			    <div class="clear"></div><br>
	    
    		</div>

    		<div class="col-xs-6">
		    	<div class="col-xs-4 right"><p><b>Full Name: </b></p></div>
			    <div class="col-xs-8 no-pad"><input value="{{ $quote[0]->fullname }}" disabled name="name" type="text" id="width" class="form-control"></div>
			    <div class="clear"></div><br>

			    <div class="col-xs-4 right"><p><b>Email Address: </b></p></div>
			    <div class="col-xs-8 no-pad"><input value="{{ $quote[0]->email }}" disabled name="email" type="text" id="width" class="form-control"></div>
			    <div class="clear"></div><hr>

			    <div class="col-xs-12"><p><b>Design: </b></p></div>
		    	<img class="col-xs-12" src="/img/bl-shirt-01.jpg">
		    	<div class="clear"></div><br>
			</div>

        </div>
    </div>
    <!-- /.row -->

</div>
@stop