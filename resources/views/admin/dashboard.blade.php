@extends('template.admin')

@section('title') Jimbes Printing @stop

@section('content') 
    
<div class="col-md-10 col-md-offset-2 dash-main">

	<div class="row">
		<div class="col-xs-12">

			<p class="col-xs-12 dash-title"><b>Dashboard</b> | Statistics & More</p>

	        <div class="col-md-3 ">
	        	<div class="stat-box" style="background-color: #2196f3;">
	        		<p><i class="fa fa-comments" aria-hidden="true"></i>Request for Quote</p>
	        	</div>
	        	<a href="{{ url('admin-request-quotes') }}"><div class="stat-box-view" style="background-color: #3f51b5;">View More</div></a>
	        </div>
	        <div class="col-md-3 ">
	        	<div class="stat-box" style="background-color: #8bc34a;">
	        		<p><i class="fa fa-flag" aria-hidden="true"></i>Orders</p>
	        	</div>
	        	<a href="{{ url('admin-orders') }}"><div class="stat-box-view" style="background-color: #4caf50;">View More</div></a>
	        </div><div class="col-md-3 ">
	        	<div class="stat-box" style="background-color: #ffeb3b;">
	        		<p><i class="fa fa-star" aria-hidden="true"></i>Product Popularity</p>
	        	</div>
	        	<a href="{{ url('admin-reports-comparison') }}"><div class="stat-box-view" style="background-color: #ffc107;">View More</div></a>
	        </div><div class="col-md-3 ">
	        	<div class="stat-box" style="background-color: #9c27b0;">
	        		<p><i class="fa fa-line-chart" aria-hidden="true"></i>Total Profit</p>
	        	</div>
	        	<a href="{{ url('admin-reports-income') }}"><div class="stat-box-view" style="background-color: #673ab7;">View More</div></a>
	        </div>

		    <div class="col-md-8">
			    <div class="panel panel-default">
		            <div class="panel-heading">
		                <h4><i class="fa fa-fw fa-check"></i> Bootstrap v3.2.0</h4>
		            </div>
		            <div class="panel-body">
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
		                <a href="#" class="btn btn-default">Learn More</a>
		            </div>
		        </div>
	        </div>

	        <div class="col-md-4">
			    <div class="panel panel-default">
		            <div class="panel-heading">
		                <h4><i class="fa fa-fw fa-check"></i> Bootstrap v3.2.0</h4>
		            </div>
		            <div class="panel-body">
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
		                <a href="#" class="btn btn-default">Learn More</a>
		            </div>
		        </div>
        </div>

	    </div>

    </div><!-- /.row -->

</div>

@stop