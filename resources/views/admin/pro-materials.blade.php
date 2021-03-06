@extends('template.admin')

@section('title') Jimbes Printing @stop

@section('content')

<div class="col-md-10 col-md-offset-2 dash-main">

	<div class="row">
		<div class="col-xs-12">

			<p class="col-xs-12 dash-title"><b>Inventory</b> <a href="admin-inventory-add" class="add-button"><i class="fa fa-plus" aria-hidden="true"></i> Add New</a></p>

			<div class="col-xs-12">
		        <table id="order-table" class="table table-bordered admin-table" cellspacing="0" width="100%">
			        <thead>
			            <tr>
			                <th>Reference No</th>
			                <th>Product Name</th>
			                <th>Quantity/Pieces</th>
			                <th>Received Date</th>
			                <th>Received By</th>
			                <th>Tags</th>
			                <th>Action</th>
			            </tr>
			        </thead>
			        <tbody>
			        	@foreach($materials as $material)
			        	<tr @if($material->quantity == 0) style="background-color:#de6969 !important;" @endif>
			                <td>{{ $material->reference_num }}</td>
			                <td>{{ $material->name }}</td>
			                <td>{{ $material->quantity }}</td>
			                <td>{{ $material->created_at }}</td>
			                <td>{{ $material->received_by }}</td>
			                <td>
			                	<?php $mtags = DB::table('pivot_materialprod')->where('is_main',1)->where('material_id',$material->id)->get(); ?>
			                	<?php $stags = DB::table('pivot_materialprod')->where('is_main',0)->where('material_id',$material->id)->get(); ?>
			                	@foreach($mtags as $mtag)
			                		<p>{{ getmainProdName($mtag->service_id) }}</p>
			                	@endforeach
			                	@foreach($stags as $stag)
			                		<p>{{ getsubProdName($stag->service_id) }}</p>
			                	@endforeach
			                </td>
			                <td><span>
			                <?php $url = url('admin-inventory-edit/'.$material->id); ?>
			                <a href="{{ $url }}" class="admin-button">Edit</a> 

			                <form action="{{ url('/delete-material') }}" method="POST" style="display: -webkit-inline-box;">
			                	<input type="hidden" name="id" value="{{ $material->id }}">
			                	<input type="submit" value="Delete" class="admin-button">
			            	</form>
			            	<?php $url2= url('/admin-inventory-tag/'.$material->id) ?>
			            	<a href="{{ $url2 }}" class="admin-button">Tag</a></span>

			            	<!-- <form action="admin-inventory-tag" method="POST" style="display: -webkit-inline-box;">
			                	<input type="hidden" name="id" value="">
			                	<input type="submit" value="Tag" class="admin-button">
			            	</form></span> -->
			            	</td>
			            </tr>
			            @endforeach
		            </tbody>
	            </table>
        	</div>

	    </div>

    </div><!-- /.row -->

</div>

@stop
@if(isset($_GET['success']))
@if($_GET['success'] == 1)
<script>
alert('Successfully added Material!');
</script>
@elseif($_GET['success'] == 2)
<script>
alert('Successfully deleted Material!');
</script>
@elseif($_GET['success'] == 3)
<script>
alert('Successfully edited Material!');
</script>
@endif
@endif