@extends('template.admin')

@section('title') Jimbes Printing @stop

@section('content') 
    
<div class="col-md-10 col-md-offset-2 dash-main">

	<div class="row">
		<div class="col-xs-12">

			<p class="col-xs-12 dash-title"><b>Orders</b></p>

			<div class="col-xs-12">
		        <table id="order-table" class="table table-bordered admin-table" cellspacing="0" width="100%">
			        <thead>
			            <tr>
			                <th>ID</th>
			                <th>Name</th>
			                <th>Stuff</th>
			                <th>Status</th>
			                <th>Action</th>
			            </tr>
			        </thead>
			        <tbody>
			        	@for($i=0; $i<25; $i++)
				            <tr>
				                <td>{{ $i }}</td>
				                <td>stuff</td>
				                <td>stuff</td>
				                <td>Active</td>
				                <td>
				                	<a href="" class="admin-button">Action!</a>
				                </td>
				            </tr>
			            @endfor
		            </tbody>
	            </table>
    		</div>

	    </div>

    </div><!-- /.row -->

</div>
@stop