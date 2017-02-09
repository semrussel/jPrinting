@extends('template.admin')

@section('title') Jimbes Printing @stop

@section('content')

<div class="col-md-10 col-md-offset-2 dash-main">

	<div class="row">
		<div class="col-xs-12">

			<p class="col-xs-12 dash-title"><b>Products</b> | Edit New Sub Product
			<form action="{{ url('/edit-subprod') }}" method="POST">
			<div class="col-xs-6">
				<div class="col-xs-12">
					<div class="col-xs-12"><p><b>Main Product:</b></p></div>
				    <div class="col-xs-12 no-pad">
					    <select class="form-control" id="mainproduct" name="mainproduct" disabled>
					        <option value="{{ $product->id }}">{{ getmainProdName($product->main_id) }}</option>
					    </select>
				    </div>
				    <div class="clear"></div><br>

			        <div class="col-xs-12"><p><b>Product Name: </b></p></div>
				    <div class="col-xs-12 no-pad"><input value="{{ $product->name }}" name="product" type="text" id="width" class="form-control" required></div>
					<div class="clear"></div><br>

				    <div class="col-xs-12"><p><b>Sizes: </b></p></div>
				    <div class="col-xs-12 no-pad"><input value="" name="12" type="text" id="p-size" class="form-control"></div>
				    <div class="clear"></div>
				    <div id="div-size">
				    		@foreach($sizes as $size)
					    	<span name="{{ $size->name }}" id="{{ $size->name }}" contenteditable="false" class="tag-label"><button class="tag-label-btn" type="button" id="btn-{{ $size->name }}" onclick="removeVarTag('{{ $size->name }}')"><i class="fa fa-times" aria-hidden="true">	</i></button>{{ $size->name }}</span>
					    	<input id="{{ $size->name }}-in" name="sizeInput[]" type="hidden" value="{{ $size->name }}">
					    	@endforeach
				    </div>
					<div class="clear"></div><br>

				    <div class="col-xs-12"><p><b>Additional Details: </b></p></div>
				    <div class="col-xs-12 no-pad"><textarea name="description" class="form-control" rows="5" id="description" required="">{{ $product->name }}</textarea></div>
				    <div class="clear"></div><br>

					<div class="col-xs-4"><p><b>Other Options: </b></p></div>

						<div class="col-xs-8 checkbox">
					    	<div class="col-xs-6">
			  					<label><input id="opt-paper" name="input[]" type="checkbox" @if($product->is_paperType == 1 ) checked="checked" @endif value="Paper Type">Paper Type</label>
			  					<br><label><input id="opt-color" name="input[]" @if($product->is_color == 1 ) checked="checked" @endif type="checkbox" value="Color">Color</label>
			  					<br><label><input id="opt-colorply" name="input[]" @if($product->is_colorFly == 1 ) checked="checked" @endif type="checkbox" value="Color Ply">Color Ply</label>
							</div>
							<div class="col-xs-6">
			  					<label><input id="opt-lamination" name="input[]" type="checkbox" @if($product->is_lam == 1 ) checked="checked" @endif value="Lamination">Lamination</label>
			  					<br><label><input id="opt-perforation" name="input[]" @if($product->is_per == 1 ) checked="checked" @endif type="checkbox" value="Perforation">Perforation</label>
			  					<br><label><input id="opt-substrate" name="input[]" @if($product->is_substrate == 1 ) checked="checked" @endif type="checkbox" value="Substrate">Substrate</label>
			  					<br><label><input id="opt-corner" @if($product->is_corner == 1 ) checked="checked" @endif name="input[]" type="checkbox" value="Corners">Corners</label>
							</div>
						</div>

					    <div class="clear"></div><hr>

					    <div id="sec-paper" @if($product->is_paperType == 0 ) hidden @endif>
						    <div class="col-xs-4"><p><b>Paper Types: </b></p></div>
						    <div class="col-xs-12 no-pad"><input value="" name="12" type="text" id="p-paper" class="form-control"></div>
						    <div class="clear"></div>
						    <div id="div-paper">
						    	@if($paperTypes != NULL)
						    	@foreach($paperTypes as $size)
							    	<span name="{{ $size->name }}" id="{{ $size->name }}" contenteditable="false" class="tag-label"><button class="tag-label-btn" type="button" id="btn-{{ $size->name }}" onclick="removeVarTag('{{ $size->name }}')"><i class="fa fa-times" aria-hidden="true">	</i></button>{{ $size->name }}</span>
							    	<input id="{{ $size->name }}-in" name="sizeInput[]" type="hidden" value="{{ $size->name }}">
							    	@endforeach
						    	@endif
						    </div>
						    <div class="clear"></div><hr>
					    </div>

				    <div id="sec-color" @if($product->is_color == 0 ) hidden @endif>
					    <div class="col-xs-4"><p><b>Color: </b></p></div>
					    <div class="col-xs-12 no-pad"><input value="" name="12" type="text" id="p-color" class="form-control"></div>
					    <div class="clear"></div>
					    <div id="div-color">
					    	@if($colors != NULL)
						    	@foreach($colors as $size)
							    	<span name="{{ $size->name }}" id="{{ $size->name }}" contenteditable="false" class="tag-label"><button class="tag-label-btn" type="button" id="btn-{{ $size->name }}" onclick="removeVarTag('{{ $size->name }}')"><i class="fa fa-times" aria-hidden="true">	</i></button>{{ $size->name }}</span>
							    	<input id="{{ $size->name }}-in" name="colorInput[]" type="hidden" value="{{ $size->name }}">
						    	@endforeach
						    @endif
					    </div>
					    <div class="clear"></div><hr>
				    </div>

				    <div id="sec-colorply" @if($product->is_colorFly == 0 ) hidden @endif>
							<div class="col-xs-12"><p><b>Color Ply: </b></p></div>
						    <div class="col-xs-12 no-pad"><input value="" name="12" type="text" id="p-colorply" class="form-control"></div>
						    <div class="clear"></div>
						    <div id="div-colorply">
						    	@if($colorPlys != NULL)
							    	@foreach($colorPlys as $size)
							    	<span name="{{ $size->name }}" id="{{ $size->name }}" contenteditable="false" class="tag-label"><button class="tag-label-btn" type="button" id="btn-{{ $size->name }}" onclick="removeVarTag('{{ $size->name }}')"><i class="fa fa-times" aria-hidden="true">	</i></button>{{ $size->name }}</span>
							    	<input id="{{ $size->name }}-in" name="sizeInput[]" type="hidden" value="{{ $size->name }}">
							    	@endforeach
						    	@endif
						    </div>
						    <div class="clear"></div><hr>
					    </div>

				    <div class="col-xs-4 col-xs-offset-8 no-pad">
	                	
	                        <input type="hidden" name="id" value="{{ $product->id }}"> 
	                        <input type="submit" value="Submit" class="btn btn-primary" style="width: 100%;">
	                    
                    </div>
                    <div class="clear"></div><br>
    			</div>
    		</div>
			<div class="col-xs-6">
		    	<div class="col-xs-12"><p><b>Product Image: </b> <input class="btn btn-primary" type="file" name="pic" accept="image/*"> </p></div>
	    		<img class="col-xs-12" src="{{ url('img/bl-shirt-01.jpg') }}">

	    	</div>
    	<div>
    </div><!-- /.row -->

</div>

@stop