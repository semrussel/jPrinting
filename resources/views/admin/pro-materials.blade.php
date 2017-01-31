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
			                <th>Action</th>
			            </tr>
			        </thead>
			        <tbody>
			        	@foreach($materials as $material)
			        	<tr>
			                <td>{{ $material->reference_num }}</td>
			                <td>{{ $material->name }}</td>
			                <td>{{ $material->quantity }}</td>
			                <td><span>
			                <?php $url = url('admin-inventory-edit/'.$material->id); ?>
			                <a href="{{ $url }}" class="admin-button">Edit</a> 

			                <form action="{{ url('/delete-material') }}" method="POST" style="display: -webkit-inline-box;">
			                	<input type="hidden" name="id" value="{{ $material->id }}">
			                	<input type="submit" value="Delete" class="admin-button">
			            	</form></span>
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