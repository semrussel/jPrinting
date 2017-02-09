@extends('template.admin')

@section('title') Jimbes Printing @stop

@section('content')

<link rel="stylesheet" href="{{ url('css/graphs.css') }}">
<style>
	.mon-pill li a {
	    color: #333;
	    background-color: white;
	    padding: 5px 10px;
	    margin-top: 10px;
	    margin-bottom: 30px;
	}
</style>
<!-- <link rel="stylesheet" href="https://cdn.oesmith.co.uk/morris-0.5.1.css"> -->

<div class="col-md-10 col-md-offset-2 dash-main">

	<div class="row">
		<div class="col-xs-12">

			<p class="col-xs-12 dash-title"><b>Reports</b> | Product Sales</p>

			<div class="col-xs-12">
				<ul class="nav nav-pills">
					<!-- <li class="active"><a data-toggle="pill" href="#day">Daily</a></li> -->
					<li class="active"><a data-toggle="pill" href="#mon">Monthly</a></li>
					<!-- <li><a data-toggle="pill" href="#ann">Annually</a></li> -->
				</ul>

				<div class="tab-content">
					<div id="mon" class="tab-pane fade in active">

						<?php

							$monnam = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
							$monfirst=true;

							$monval = array(
								'Jan' => array (20, 20, 20, 20, 10, 10),
								'Feb' => array (60, 120, 30, 50, 25, 100),
								'Mar' => array (40, 50, 30, 50, 20, 30, 200, 120, 500, 300),
								'Apr' => array (40, 50, 30, 50, 20, 30),
								'May' => array (40, 50, 30, 50, 20, 30),
								'Jun' => array (40, 50, 30, 50, 20, 30),
								'Jul' => array (40, 50, 30, 50, 20, 30),
								'Aug' => array (40, 50, 30, 50, 20, 30),
								'Sep' => array (40, 50, 30, 50, 20, 30),
								'Oct' => array (40, 50, 30, 50, 20, 30),
								'Nov' => array (40, 50, 30, 50, 20, 30),
								'Dec' => array (40, 50, 30, 50, 20, 30)
								);

							$monvalsub = array(
								'Jan' => array (40, 50, 30, 50, 20, 60),
								'Feb' => array (60, 120, 30, 50, 25, 100),
								'Mar' => array (40, 50, 30, 50, 20, 30, 200, 120, 250, 100),
								'Apr' => array (40, 50, 30, 50, 20, 30),
								'May' => array (40, 50, 30, 50, 20, 30),
								'Jun' => array (40, 50, 30, 50, 20, 30),
								'Jul' => array (40, 50, 30, 50, 20, 30),
								'Aug' => array (40, 50, 30, 50, 20, 30),
								'Sep' => array (40, 50, 30, 50, 20, 30),
								'Oct' => array (40, 50, 30, 50, 20, 30),
								'Nov' => array (40, 50, 30, 50, 20, 30),
								'Dec' => array (40, 50, 30, 50, 20, 30)
								);

							$dval = array('Jan' => '','Feb' => '','Mar' => '','Apr' => '','May' => '','Jun' => '','Jul' => '','Aug' => '','Sep' => '','Oct' => '','Nov' => '','Dec' => '');
							$dvalsub = array('Jan' => '','Feb' => '','Mar' => '','Apr' => '','May' => '','Jun' => '','Jul' => '','Aug' => '','Sep' => '','Oct' => '','Nov' => '','Dec' => '');  
						?>

						<ul class="nav nav-pills mon-pill">
							@foreach ($monnam as $mon)
								@if ($monfirst) <li class="active"> <?php $monfirst=false; ?>
								@else <li>
								@endif
								<a data-toggle="pill" href="#monpill-{{ $mon }}">{{ $mon }}</a></li>
							@endforeach
						</ul>

						<div class="tab-content">
							<?php $monfirst=true; ?>
							@foreach ($monnam as $mon)
								<?php $keycount=1; $montotal=0; $montotalsub=0; ?>
								@if ($monfirst) <div id="monpill-{{ $mon }}" class="tab-pane fade in active"> <?php $monfirst=false; ?>
								@else <div id="monpill-{{ $mon }}" class="tab-pane fade">
								@endif

								<?php 
									foreach ($monval[$mon] as $val) { 
										$dval[$mon] .= $val.', ';
										$montotal += $val; } 
									$dval[$mon] .= '0'; 
								?>

								<h4>Main Products</h3>
								<aside class="chart vert">
									<canvas id="canPie-{{ $mon }}" width="300" height="200" data-values="{{ $dval[$mon] }}">
									</canvas>
									<ol class="legend">
										@foreach ($monval[$mon] as $prodval)
											<?php $prodper=number_format(($prodval/$montotal)*100, 0);?>
											<li class="key s{{ $keycount }}">Sample = <b>P{{ $prodval }}</b> | {{ $prodper }}%</li>
											<?php $keycount++; ?>
										@endforeach
									</ol>
								</aside>

								<?php 
									$keycount=1; 
									foreach ($monvalsub[$mon] as $val) { 
										$dvalsub[$mon] .= $val.', ';
										$montotalsub += $val; } 
									$dvalsub[$mon] .= '0'; 
								?>

								<div class="clear"></div>
								<h4>Sub Products</h3>
								<aside class="chart vert">
									<canvas id="canPie-{{ $mon }}-sub" width="300" height="200" data-values="{{ $dvalsub[$mon] }}">
									</canvas>
									<ol class="legend">
										@foreach ($monvalsub[$mon] as $prodval)
											<?php $prodper=number_format(($prodval/$montotalsub)*100, 0);?>
											<li class="key s{{ $keycount }}">Sample = <b>P{{ $prodval }}</b> | {{ $prodper }}%</li>
											<?php $keycount++; ?>
										@endforeach
									</ol>
								</aside>

								</div>
							@endforeach
						</div>

					</div>
					<div id="ann" class="tab-pane fade">
						<span><b>From:</b>
						<select class="form-control" id="annyear" name="annyear" style="margin:10px 0; width: 30%; display: -webkit-inline-box;">
							@for ($i=2017; $i>2017-20; $i--)
					        <option>{{ $i }}</option>
				        	@endfor
				        </select>

				        <?php 
				        	$valr = ""; $anntotal=0; $keycount=1;
				        	$annval = array(40, 50, 30, 50, 20, 30); 
				        	foreach ($annval as $val) { 
								$valr .= $val.', ';
								$anntotal += $val; } 
								$valr .= '0'; 
				        ?>

				        <h4>Main Products</h3>
				        <aside class="chart vert" style="width: 100%;">
							<canvas id="canPie-Year" width="300" height="200" data-values="{{ $valr }}">
							</canvas>
							<ol class="legend">
								@foreach ($annval as $prodval)
									<?php $prodper=number_format(($prodval/$anntotal)*100, 0);?>
									<li class="key s{{ $keycount }}">Sample = <b>P{{ $prodval }}</b> | {{ $prodper }}%</li>
									<?php $keycount++; ?>
								@endforeach
							</ol>
						</aside>

						<div class="clear"></div>
						<h4>Sub Products</h3>
						<aside class="chart vert" style="width: 100%;">
							<canvas id="canPie-Year-sub" width="300" height="200" data-values="{{ $valr }}">
							</canvas>
							<ol class="legend">
								@foreach ($annval as $prodval)
									<?php $prodper=number_format(($prodval/$anntotal)*100, 0);?>
									<li class="key s{{ $keycount }}">Sample = <b>P{{ $prodval }}</b> | {{ $prodper }}%</li>
									<?php $keycount++; ?>
								@endforeach
							</ol>
						</aside>
					</div>
				</div>	
			</div>
		
	    </div>

    </div><!-- /.row -->

</div>

@stop
