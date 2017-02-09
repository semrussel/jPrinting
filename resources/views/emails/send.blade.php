<html>
<head>
	<link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Raleway">
	<style>
      	body {
		font-family: 'Raleway';
		background-color: #d5d5d5;
		}
		.tg  {border-collapse:collapse;border-spacing:0;}
		.tg td{font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
		.tg th{font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
		.tg .tg-yw4l{vertical-align:top}
		@media screen and (max-width: 767px) {.tg {width: auto !important;}.tg col {width: auto !important;}.tg-wrap {overflow-x: auto;-webkit-overflow-scrolling: touch;}}</style>
	</style>
</head>
<body style="background: white; color: black">

<img src="{{ url('img/jb-logo-title.png') }}" height="100px">
<br>
<p>6 August 2016</p>
<br>
<p><b>{{ $customerName }}</b></p>
<br>
<p>Dear Ma'am:</p>
<p>Greetings!</p>
<p>We are pleased to submit to you our best price quotation for your printing requirements. Listed here under are the following specifications:</p>
<table class="tg">
	<tr>
		<th class="tg-yw4l">ITEM</th>
		<th class="tg-yw4l">QTY.</th>
		<th class="tg-yw4l">DESCRIPTION</th>
		<th class="tg-yw4l">AMOUNT</th>
	</tr>
	<tr>
		<td class="tg-yw4l">{{ $product }}</td>
		<td class="tg-yw4l">{{ $quantity }}</td>
		<td class="tg-yw4l">
			<p>{{ $details }}</p>
		</td>
		<td class="tg-yw4l"></td>
	</tr>
</table>
<p>Terms: Requiring 50% deposit as initial payment upon PO and cash/ chack upon delivery.
<br>Delivery Date: as  per PO requirement.</p>
<p>Thank you very much for giving us the opportunity. We are looking forward to your immediate approval.</p>
<br>
<p>Truly Yours,</p>
<div style="float:left; width: 50%;">
	<p><b>Lhiza Besinio</b>
	<br>General Manager
	<br><b>JIMBES PRINTING</b>
	<br>Telephone: (+632) 455 6138
	<br>Mobile: (+63) 922 886 8779
	<br>Email: <a href="">jimbes.printing@yahoo.com</a>	
	</p>
</div>
<div style="float:left; width: 50%;">
	<p>
		Date: {{ date('M-d-Y') }}
	</p>
</div>
</body>
</html>