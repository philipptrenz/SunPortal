<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>sunportal</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
	<div id="outer">
		<div class="container" id="content">
			<div class="row">
				<div class="status-container col-sm">
					<div class="status">
						<h5 class="lang en">daily yield</h5>
						<h5 class="lang de">Tagesertrag</h5>
						<p class="meter" id="dayTotal">loading ...</p>
						<div class="line"></div>
					</div>
				</div>
				<div class="status-container col-sm">
					<div class="status">
						<h5 class="lang en">total yield</h5>
						<h5 class="lang de">Gesamtertrag</h5>
						<p class="meter" id="total">loading ...</p>
						<div class="line"></div>
					</div>
				</div>
				<div class="status-container col-sm">
					<div class="status">
						<h5 class="lang en">CO<sub>2</sub> savings</h5>
						<h5 class="lang de">CO<sub>2</sub>-Einsparung</h5>
						<p class="meter" id="co2">loading ...</p>
						<div class="line"></div>
					</div>
				</div>
			</div>

			<div class="row" id="charts"></div>

		</div>
	</div>


	<script src="./js/jquery-3.3.1.js"></script>
	<script src="./js/moment.min.js"></script>
	<script src="./js/chart.js"></script>
	<script src="./js/main.js"></script>

</body>

</html>
