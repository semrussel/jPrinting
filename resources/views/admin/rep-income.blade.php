@extends('template.admin')

@section('title') Jimbes Printing @stop

@section('content')

<link rel="stylesheet" href="{{ url('css/graphs.css') }}">
<link rel="stylesheet" href="https://cdn.oesmith.co.uk/morris-0.5.1.css">

<div class="col-md-10 col-md-offset-2 dash-main">

	<div class="row">
		<div class="col-xs-12">

			<p class="col-xs-12 dash-title"><b>Reports</b> | Income</p>

			<div class="col-xs-6">
				<ul class="nav nav-pills">
					<!-- <li class="active"><a data-toggle="pill" href="#day">Daily</a></li> -->
					<li class="active"><a data-toggle="pill" href="#mon">Monthly</a></li>
					<li><a data-toggle="pill" href="#ann">Annually</a></li>
				</ul>

				<div class="tab-content">

					<?php
						$totalIncome = 20000;

						$jan = getFinal($jan);
						$feb = getFinal($feb);
						$mar = getFinal($mar);
						$apr = getFinal($apr);
						$may = getFinal($may);
						$jun = getFinal($jun);
						$jul = getFinal($jul);
						$aug = getFinal($aug);
						$sep = getFinal($sep);
						$oct = getFinal($oct);
						$nov = getFinal($nov);
						$dec = getFinal($dec);

						// var_dump($jan);
						// die(0);
						if($totalIncome>0){
							$mon100 = number_format(round($totalIncome, 2), 0);
							$mon90 = number_format(round(($totalIncome * 0.9), 2), 0);
							$mon80 = number_format(round(($totalIncome * 0.8), 2), 0);
							$mon70 = number_format(round(($totalIncome * 0.7), 2), 0);
							$mon60 = number_format(round(($totalIncome * 0.6), 2), 0);
							$mon50 = number_format(round(($totalIncome * 0.5), 2), 0);
							$mon40 = number_format(round(($totalIncome * 0.4), 2), 0);
							$mon30 = number_format(round(($totalIncome * 0.3), 2), 0);
							$mon20 = number_format(round(($totalIncome * 0.2), 2), 0);
							$mon10 = number_format(round(($totalIncome * 0.1), 2), 0);
						} else {
							$mon100 = 0; $mon90 = 0; $mon80 = 0; $mon70 = 0;
							$mon60 = 0; $mon50 = 0; $mon40 = 0; $mon30 = 0;
							$mon20 = 0; $mon10 = 0;
						}
					?>

					<div id="mon" class="tab-pane fade in active">
						<div id="chart">
							<ul id="numbers">
								<li><span>{{ $mon100 }}</span></li>
								<li><span>{{ $mon90 }}</span></li>
								<li><span>{{ $mon80 }}</span></li>
								<li><span>{{ $mon70 }}</span></li>
								<li><span>{{ $mon60 }}</span></li>
								<li><span>{{ $mon50 }}</span></li>
								<li><span>{{ $mon40 }}</span></li>
								<li><span>{{ $mon30 }}</span></li>
								<li><span>{{ $mon20 }}</span></li>
								<li><span>{{ $mon10 }}</span></li>
							</ul>

							<ul id="bars">
								<?php
									$monval = array($jan, $feb, $mar, $apr, $may, $jun, $jul, $aug, $sep, $oct, $nov, $dec); //income per month
									$monnam = array("Jan", "Feb", "Mar", "Apr","May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
									$moncur = 0;

									foreach ($monval as $val) {
										
											$valr = round((($val / $totalIncome) * 100), 2);
											echo '<li><div data-percentage="'.$valr.'" class="bar"></div><span>'.$monnam[$moncur].'</span>';
											$val = number_format($val, 0);
											$valr = 85 - $valr;
											echo '<span class="real-val" style="top:'.$valr.'%;">'.$val.'</span></li>';
											$moncur++;
										
									}
								?>
							</ul>
						</div>	
						<h4>Total Income for {{ date('Y') }}: {{ $mtotalIncome }}</h4>
					</div>

					<?php
						if($totalIncome>0){
							$ann100 = number_format(round($totalIncome, 2), 0);
							$ann90 = number_format(round(($totalIncome * 0.9), 2), 0);
							$ann80 = number_format(round(($totalIncome * 0.8), 2), 0);
							$ann70 = number_format(round(($totalIncome * 0.7), 2), 0);
							$ann60 = number_format(round(($totalIncome * 0.6), 2), 0);
							$ann50 = number_format(round(($totalIncome * 0.5), 2), 0);
							$ann40 = number_format(round(($totalIncome * 0.4), 2), 0);
							$ann30 = number_format(round(($totalIncome * 0.3), 2), 0);
							$ann20 = number_format(round(($totalIncome * 0.2), 2), 0);
							$ann10 = number_format(round(($totalIncome * 0.1), 2), 0);
						} else {
							$ann100 = 0; $ann90 = 0; $ann80 = 0; $ann70 = 0;
							$ann60 = 0; $ann50 = 0; $ann40 = 0; $ann30 = 0;
							$ann20 = 0; $ann10 = 0;
						}
					?>

					<div id="ann" class="tab-pane fade">
						<div class="col-xs-6">
						<span><b>From:</b>
						<select class="form-control" id="annyear" name="annyear" style="margin:10px 0; width: 50%; display: -webkit-inline-box;">
					        <option>1990 - 1999</option>
					        <option>2000 - 2009</option>
					        <option selected="selected">2010 - 2019</option>
					        <option>2020 - 2029</option>
				        </select>
				        </span>
						<div id="chart">
							<ul id="numbers">
								<li><span>{{ $ann100 }}</span></li>
								<li><span>{{ $ann90 }}</span></li>
								<li><span>{{ $ann80 }}</span></li>
								<li><span>{{ $ann70 }}</span></li>
								<li><span>{{ $ann60 }}</span></li>
								<li><span>{{ $ann50 }}</span></li>
								<li><span>{{ $ann40 }}</span></li>
								<li><span>{{ $ann30 }}</span></li>
								<li><span>{{ $ann20 }}</span></li>
								<li><span>{{ $ann10 }}</span></li>
							</ul>

							<ul id="bars">
								<?php
									for ($i=1990; $i <= 2029; $i++) { 
										$wew = "year".$i;
										$$wew = 0;
										for ($j=0; $j < count($orders); $j++) {
											if ($i == date('Y',strtotime($orders[$j]->created_at))) {
												$$wew += $orders[$j]->price;
											}
											
										}
									}

									for ($i=1990; $i <=2029 ; $i++) { 
										$wew = "year".$i;
										$annval[$i] = $$wew;
									}

									for ($i=1990; $i <=2029 ; $i++) { 
										$annnam[$i] = $i;
									}

									$anncur = 1990;

									foreach ($annval as $val) {
										// if($val > 0) {
											$valr = round((($val / $totalIncome) * 100), 2);
											echo '<li id="ann-'.$anncur.'">';
											echo '<div data-percentage="'.$valr.'" class="bar"';
											if ($valr > 10) { echo 'style=":before{top:-25px;}"'; }
											echo '></div><span>'.$annnam[$anncur].'</span>';
											$val = number_format($val, 0);
											$valr = 85 - $valr;
											echo '<span class="real-val" style="top:'.$valr.'%;">'.$val.'</span></li>';
										// }
										$anncur++;
									}
								?>
							</ul>
						</div>	
					</div>
				</div>	
			</div>
		
	    </div>

    </div><!-- /.row -->

</div>

@stop