<?php
// php -S localhost:8080
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/php/action05.php';
?>
<!doctype html>
<html>
	<head>
	   <link rel="stylesheet" href="css/bootstrap.min.css">
	   <script src="js/jquery.min.js"></script>
	   <script src="js/popper.min.js"></script>
	   <script src="js/bootstrap.min.js"></script>

	   <script src="plotly/plotly-latest.min.js"></script>
	   <!--
	   <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
	   -->
	   <meta charset="utf-8">
	   <title>PHP-ML</title>
	</head>
	<body>
	   <nav class="navbar navbar-expand-sm bg-primary">
	     <ul class="navbar-nav">
	       <li class="nav-item">
	         <a class="nav-link text-white" href="#">
	         	PHP-ML
	     	 </a>
	       </li>
	     </ul>
	   </nav>
	   <br>
	   <div class="container">
	   	 <img src="img/php-ml-logo.png" width="5%" style="float: right;">
	     <h2>Inteligência Artificial - BTC</h2>
	     <br>
	     <form action="index09.php" method="POST">
		   <input class="form-control" type="number" name="dias" placeholder="dias a frente" min="1" max="200">
		   <br>
		   <button type="submit" class="btn btn-lg btn-primary">ENVIAR</button>
	     </form>

	     <center>
	     	<div id="myDiv" style="width: 800px; height: 300px;"></div>
	     </center>

	     <?php
	     	if(isset($result)&&count($result)>0) {
	     		echo "
	     		<script>
					var trace = {
					  x: $x,
					  y: $y,
					  type: 'scatter',
					};

					var data = [trace];

					Plotly.newPlot('myDiv', data, {}, {showSendToCloud: true});
				</script>
	     		";
	     	}
	     ?>
	   </div>
	</body>
</html>
