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

						$jan = 0;
						$feb = 0;
						$mar = 0;
						$apr = 0;
						$may = 0;
						$jun = 0;
						$jul = 0;
						$aug = 0;
						$sep = 0;
						$oct = 0;
						$nov = 0;
						$dec = 0;
						for ($i=1; $i <=12 ; $i++) {
							foreach ($months[$i] as $month) {
							 	switch ($i) {
								    case "1":
								        $jan += $month->price;
								        break;
								    case "2":
								        $feb += $month->price;
								        break;
								    case "3":
								        $mar += $month->price;
								        break;
								    case "4":
								        $apr += $month->price;
								        break;
								    case "5":
								        $may += $month->price;
								        break;
								    case "6":
								        $jun += $month->price;
								        break;
								    case "7":
								        $jul += $month->price;
								        break;
								    case "8":
								        $aug += $month->price;
								        break;
								    case "9":
								        $sep += $month->price;
								        break;
								    case "10":
								        $oct += $month->price;
								        break;
								    case "11":
								        $nov += $month->price;
								        break;
								    case "12":
								        $dec += $month->price;
								        break;
								    default:
								        echo "Your favorite color is neither red, blue, nor green!";
								} 
							 } 
							
						}


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
										if($val > 0) {
											$valr = round((($val / $totalIncome) * 100), 0);
											echo '<li><div data-percentage="'.$valr.'" class="bar"></div><span>'.$monnam[$moncur].'</span>';
											$val = number_format($val, 0);
											$valr = 85 - $valr;
											echo '<span class="real-val" style="top:'.$valr.'%;">'.$val.'</span></li>';
											$moncur++;
										}
									}
								?>
							</ul>
						</div>	
					</div>

					<?php

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
					?>

					<div id="ann" class="tab-pane fade">
						<select class="form-control" id="annyear" name="annyear" style="margin-top:20px">
					        <option>1990 - 1999</option>
					        <option>2000 - 2009</option>
					        <option selected="selected">2010 - 2019</option>
					        <option>2020 - 2029</option>
				        </select>
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
									$annval = array(
										4000, 2000, 6000, 2000, 20000, 12000, 4000, 2000, 6000, 4000, 
										2000, 6000, 6000, 2000, 20000, 12000, 4000, 2000, 6000, 4000,
										4000, 2000, 6000, 2000, 20000, 12000, 4000, 2000, 0, 0,
										20000, 0, 0, 0, 0, 0, 0, 0, 0, 0);
									$annnam = array(
										"1990", "1991", "1992", "1993", "1994", "1995", "1996", "1997", "1998", "1999",
										"2000", "2001", "2002", "2003", "2004", "2005", "2006", "2007", "2008", "2009",
										"2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019",
										"2020", "2021", "2022", "2023", "2024", "2025", "2026", "2027", "2028", "2029");
									$anncur = 0;

									foreach ($annval as $val) {
										// if($val > 0) {
											$valr = round((($val / $totalIncome) * 100), 0);
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

		<h4>Total Income: {{ $totalIncome }}</h4>

	    </div>

    </div><!-- /.row -->

</div>

@stop