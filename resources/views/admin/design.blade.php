@extends('template.admin')

@section('title') Jimbes Printing @stop

@section('content') 
    
<div class="col-md-10 col-md-offset-2 dash-main">

	<div class="row">
		<div class="col-xs-12">

			<p class="col-xs-12 dash-title"><b>Design</b> | Product Designs <a href="admin-design-add" class="add-button"><i class="fa fa-plus" aria-hidden="true"></i> Add New</a></p>

			<!-- <div class="col-xs-6">
				<span><b>Filter By:</b>
				<select class="form-control" id="order-sort" name="order-sort" style="margin:10px 0; width: 50%; display: -webkit-inline-box;">
					<option>None</option>
		        </select>
		        </span>
	        </div> -->

			<div class="col-xs-12">
		        <table id="order-table" class="table table-bordered admin-table" cellspacing="0" width="100%">
			        <thead>
			            <tr>
			                <th>ID</th>
			                <th>Design</th>
			                <th>Product</th>
			                <th>Action</th>
			            </tr>
			        </thead>
			        <tbody>
		        		@for($i=0; $i<count($designs); $i++)
			        		<tr>
			        			<td>{{ $designs[$i]->id }}</td>
			        			<td><img id="jb-logo" src="{{ url($designs[$i]->url) }}" width="100%"></td>
			        			@if($designs[$i]->is_main == 1)
			        				<td>{{ getmainProdName($designs[$i]->service_id) }}</td>
			        			@else
			        				<td>{{ getsubProdName($designs[$i]->service_id) }}</td>
			        			@endif
			        			<td>
			        				<form action="{{ url('/delete-design') }}" method="POST" style="display: -webkit-inline-box;">
					                	<input type="hidden" name="id" value="{{ $designs[$i]->id }}">
					                	<input type="submit" value="Delete" class="admin-button">
					            	</form>
				            	</td>
			        		</tr>
		        		@endfor
			        	
		            </tbody>
	            </table>
	            <br>
    		</div>

	    </div>

    </div><!-- /.row -->

</div>
@if(isset($_GET['success']))
<script>
alert('Successfully added Design!');
</script>
@endif

@if(isset($_GET['delete']))
<script>
alert('Successfully deleted Design!');
</script>
@endif

@stop