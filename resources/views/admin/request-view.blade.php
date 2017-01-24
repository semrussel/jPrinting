@extends('template.admin')

@section('title') Jimbes Printing @stop

@section('content') 
    
<div class="col-md-10 col-md-offset-2 dash-main">

	<div class="row">
		<div class="col-xs-12">

			<p class="col-xs-12 dash-title"><b>Requests</b></p>

			<div class="col-xs-6">

				<div class="col-xs-4 right"><p><b>Quote Title: </b></p></div>
			    <div class="col-xs-8 no-pad"><input name="title" type="text" id="width" class="form-control" disabled></div>
			    <div class="clear"></div><br>

			    <div class="col-xs-4 right"><p><b>Quote Type: </b></p></div>
			    <div class="col-xs-8 no-pad"><input name="type" type="text" id="width" class="form-control" disabled></div>
			    <div class="clear"></div><hr>

			    <!-- -- -->

			    <?php 
			    	$vpro='notebooks | perfect bound, hard cover';

			    	$vpaper = 0;
			    	if (preg_match('[invitations|business cards|tickets|posters|office forms|certificates|receipts|notebooks|flyers|borchures]', $vpro)) { $vpaper = 1; }

			    	$vcolor = 0;
			    	if (preg_match('[souvenir|receipts|notebooks]', $vpro)) { 
			    		$vcolor = 1; }

			    	$vcolorPly = 0;
			    	if (preg_match('[receipts]', $vpro)) { 
			    		$vcolorPly = 1; }
			    	
			    	$vlamination = 0;
			    	if (preg_match('[poster|business cards]', $vpro)) { 
			    		$vlamination = 1; }
			    	
			    	$vperforation = 0;
			    	if (preg_match('[tickets]', $vpro)) { 
			    		$vperforation = 1; }

			    	$vsubstrate = 0;
			    	if (preg_match('[stickers]', $vpro)) { 
			    		$vsubstrate = 1; }

			    	$vcorners = 0;
			    	if (preg_match('[business cards]', $vpro)) { 
			    		$vcorners = 1; }

			    ?>

			    <div class="col-xs-4 right"><p><b>
			    	<?php 
			    		if(preg_match('[notebooks]', $vpro)) { echo 'No of Sheets:'; }
			    		else { echo 'Size:'; } ?>
			    </b></p></div>
			    <div class="col-xs-8 no-pad"><input name="size" type="text" id="width" class="form-control" disabled></div>
			    <div class="clear"></div><br>

			    @if($vpaper==1)
				    <div class="col-xs-4 right"><p><b> 
				    	<?php 
				    		if(preg_match('[notebooks]', $vpro)) { echo 'Inner Pages - Pages Type:'; } 
				    		else { echo 'Paper Type:'; } ?>
				    </b></p></div>
				    <div class="col-xs-8 no-pad"><input name="paperType" type="text" id="width" class="form-control" disabled></div>
				    <div class="clear"></div><br>
			    @endif

				@if($vcolor==1)
				    <div class="col-xs-4 right"><p><b>
				    	<?php 
				    		if(preg_match('[souvenir]', $vpro)) { echo 'Product:'; }
				    		else if(preg_match('[notebooks]', $vpro)) { echo 'Inner Pages - Printing:'; } 
				    		else { echo 'Color:'; } ?>
				    </b></p></div>
				    <div class="col-xs-8 no-pad"><input name="color" type="text" id="width" class="form-control" disabled></div>
				    <div class="clear"></div><br>
				@endif

				@if($vcolorPly==1)
				    <div class="col-xs-4 right"><p><b>Color of Ply: </b></p></div>
				    <div class="col-xs-8 no-pad"><input name="colorPly" type="text" id="width" class="form-control" disabled></div>
				    <div class="clear"></div><br>
				@endif

			    @if($vlamination==1)
				    <div class="col-xs-4 right"><p><b>Lamination: </b></p></div>
				    <div class="col-xs-8 no-pad"><input name="lamination" type="text" id="width" class="form-control" disabled></div>
				    <div class="clear"></div><br>
				@endif

			    @if($vperforation==1)
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
				@endif

			    <div class="col-xs-4 right"><p><b>Extras: </b></p></div>
			    <div class="col-xs-8 no-pad"><textarea name="description" class="form-control" rows="5" id="description" disabled></textarea></div>
			    <div class="clear"></div><hr>

			    <!-- -- -->

				<div class="col-xs-4 right"><p><b>Quantity: </b></p></div>
			    <div class="col-xs-8 no-pad"><input name="quantity" type="text" id="width" class="form-control" disabled></div>
			    <div class="clear"></div><hr>
			    
			    <!-- -- -->

			    <div class="col-xs-4 right"><p><b>Price: </b></p></div>
			    <div class="col-xs-8 no-pad"><input name="price" type="text" id="width" class="form-control" required></div>
			    <div class="clear"></div><br>

			    <input type="hidden" value="brochures | bi-fold" name="product">
			    <div class="col-xs-4 col-xs-offset-8 no-pad"><input type="submit" class="btn btn-primary" id="submitRequest" name="submit" value='Submit' style="width: 100%;"></div>
			    <div class="clear"></div><br>
	    
    		</div>

    		<div class="col-xs-6">
		    	<div class="col-xs-4 right"><p><b>Full Name: </b></p></div>
			    <div class="col-xs-8 no-pad"><input name="name" type="text" id="width" class="form-control" disabled></div>
			    <div class="clear"></div><br>

			    <div class="col-xs-4 right"><p><b>Email Address: </b></p></div>
			    <div class="col-xs-8 no-pad"><input name="email" type="text" id="width" class="form-control" disabled></div>
			    <div class="clear"></div><hr>

			    <div class="col-xs-12"><p><b>Design: </b></p></div>
		    	<img class="col-xs-12" src="/img/bl-shirt-01.jpg">
		    	<div class="clear"></div><br>
			</div>

	    </div>

    </div><!-- /.row -->

</div>

@stop