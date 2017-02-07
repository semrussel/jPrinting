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
					<!-- <div id="day" class="tab-pane fade in active">	
						<div id="chart">
							<ul id="numbers">
								<li><span>{{ $totalIncome }}</span></li>
								<li><span>90%</span></li>
								<li><span>80%</span></li>
								<li><span>70%</span></li>
								<li><span>60%</span></li>
								<li><span>50%</span></li>
								<li><span>40%</span></li>
								<li><span>30%</span></li>
								<li><span>20%</span></li>
								<li><span>10%</span></li>
								<li><span>0%</span></li>
							</ul>

							<ul id="bars">
								<li><div data-percentage="56" class="bar"></div><span>Monday</span></li>
								<li><div data-percentage="33" class="bar"></div><span>Tuesday</span></li>
								<li><div data-percentage="54" class="bar"></div><span>Wednesday</span></li>
								<li><div data-percentage="94" class="bar"></div><span>Thursday</span></li>
								<li><div data-percentage="44" class="bar"></div><span>Friday</span></li>
								<li><div data-percentage="23" class="bar"></div><span>Saturday</span></li>
								<li><div data-percentage="23" class="bar"></div><span>Sunday</span></li>
							</ul>
						</div>			
					</div> -->

					<?php
						$totalIncome = 20000; //highest income

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
								<li><span>0.00</span></li>
							</ul>

							<ul id="bars">
								<?php
									$monval = array(16500, 5000, 6500, 12000, 5500, 2300, 19300, 13000, 12043, 9000, 19000); //income per month
									$monnam = array("Jan", "Feb", "Mar", "Apr", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
									$moncur = 0;

									foreach ($monval as $val) {
										$valr = round((($val / $totalIncome) * 100), 0);
										echo '<li><div data-percentage="'.$valr.'" class="bar"></div><span>'.$monnam[$moncur].'</span>';
										$val = number_format($val, 0);
										$valr = 85 - $valr;
										echo '<span class="real-val" style="top:'.$valr.'%;">'.$val.'</span></li>';
										$moncur++;
									}
								?>
							</ul>
						</div>	
					</div>
					<div id="ann" class="tab-pane fade">
						<div id="chart">
							<ul id="numbers">
								<li><span>100%</span></li>
								<li><span>90%</span></li>
								<li><span>80%</span></li>
								<li><span>70%</span></li>
								<li><span>60%</span></li>
								<li><span>50%</span></li>
								<li><span>40%</span></li>
								<li><span>30%</span></li>
								<li><span>20%</span></li>
								<li><span>10%</span></li>
								<li><span>0%</span></li>
							</ul>

							<ul id="bars">
								<li><div data-percentage="93" class="bar"></div><span>2007</span></li>
								<li><div data-percentage="58" class="bar"></div><span>2008</span></li>
								<li><div data-percentage="29" class="bar"></div><span>2009</span></li>
								<li><div data-percentage="50" class="bar"></div><span>2010</span></li>
								<li><div data-percentage="19" class="bar"></div><span>2011</span></li>
								<li><div data-percentage="06" class="bar"></div><span>2012</span></li>
								<li><div data-percentage="38" class="bar"></div><span>2013</span></li>
								<li><div data-percentage="36" class="bar"></div><span>2014</span></li>
								<li><div data-percentage="39" class="bar"></div><span>2015</span></li>
								<li><div data-percentage="63" class="bar"></div><span>2016</span></li>
								<li><div data-percentage="38" class="bar"></div><span>2017</span></li>
							</ul>
						</div>	
					</div>
				</div>	
			</div>

	    </div>

    </div><!-- /.row -->

</div>

@stop