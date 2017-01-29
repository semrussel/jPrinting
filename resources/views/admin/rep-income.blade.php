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
					<li class="active"><a data-toggle="pill" href="#day">Daily</a></li>
					<li><a data-toggle="pill" href="#mon">Monthly</a></li>
					<li><a data-toggle="pill" href="#ann">Annually</a></li>
				</ul>

				<div class="tab-content">
					<div id="day" class="tab-pane fade in active">	
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
								<li><div data-percentage="56" class="bar"></div><span>Monday</span></li>
								<li><div data-percentage="33" class="bar"></div><span>Tuesday</span></li>
								<li><div data-percentage="54" class="bar"></div><span>Wednesday</span></li>
								<li><div data-percentage="94" class="bar"></div><span>Thursday</span></li>
								<li><div data-percentage="44" class="bar"></div><span>Friday</span></li>
								<li><div data-percentage="23" class="bar"></div><span>Saturday</span></li>
								<li><div data-percentage="23" class="bar"></div><span>Sunday</span></li>
							</ul>
						</div>			
					</div>
					<div id="mon" class="tab-pane fade">
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
								<li><div data-percentage="56" class="bar"></div><span>Jan</span></li>
								<li><div data-percentage="33" class="bar"></div><span>Feb</span></li>
								<li><div data-percentage="54" class="bar"></div><span>Mar</span></li>
								<li><div data-percentage="94" class="bar"></div><span>Apr</span></li>
								<li><div data-percentage="44" class="bar"></div><span>May</span></li>
								<li><div data-percentage="23" class="bar"></div><span>Jun</span></li>
								<li><div data-percentage="65" class="bar"></div><span>Jul</span></li>
								<li><div data-percentage="63" class="bar"></div><span>Aug</span></li>
								<li><div data-percentage="93" class="bar"></div><span>Sep</span></li>
								<li><div data-percentage="36" class="bar"></div><span>Oct</span></li>
								<li><div data-percentage="12" class="bar"></div><span>Nov</span></li>
								<li><div data-percentage="70" class="bar"></div><span>Dec</span></li>
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