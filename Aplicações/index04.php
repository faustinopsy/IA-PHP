<?php
// php -S localhost:8080
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/php/action03.php';
?>
<!doctype html>
<html>
	<head>
	   <link rel="stylesheet" href="css/bootstrap.min.css">
	   <script src="js/jquery.min.js"></script>
	   <script src="js/popper.min.js"></script>
	   <script src="js/bootstrap.min.js"></script>
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
	     <h2>Inteligência Artificial com PHP-ML</h2>
	     <br>

	     <form action="index04.php" method="POST">
		   <input class="form-control" type="number" name="tamanho" placeholder="metragem em m²" min="10">
		   <br>
		   <input class="form-control" type="number" name="idade" placeholder="idade da construção em anos">
		   <br>
		   <input value="<?php echo $result; ?>" class="form-control" type="text" name="preco" placeholder="preço estimado do imóvel em R$" disabled>
		   <br>
		   <div align="right">
		      <button type="submit" class="btn btn-lg btn-primary">ENVIAR</button>
		   </div>
	     </form>
	   </div>
	</body>
</html>
