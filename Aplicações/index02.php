<?php
// php -S localhost:8080
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/php/action02.php';
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

	     <form action="index02.php" method="POST">
		     <input class="form-control" type="number" name="idade" placeholder="Idade" min="18" max="50">
		     <br>
			 <div class="form-group">
				 <label for="sel1">Profissão:</label>
				 <select class="form-control" name="profissao">
					 <option value="0">Engenheiro</option>
					 <option value="1">Advogado</option>
					 <option value="2">Administrador</option>
					 <option value="3">Programador</option>
					 <option value="4">Cientista de Dados</option>
					 <option value="5">Empresário</option>
					 <option value="6">Médico</option>
				 </select>
			 </div>
			 <br>
			 <input class="form-control" type="number" name="salario" placeholder="Salário" min="1000">
		     <br>
		     Sexo: 
			 <div class="form-check-inline">
			  <label class="form-check-label">
			    <input class="form-check-input" type="radio" name="sexo" value="0">Masculino
			  </label>
			 </div>
			 <div class="form-check-inline">
			  <label class="form-check-label">
			    <input class="form-check-input" type="radio" name="sexo" value="1">Feminino
			  </label>
			 </div>
			 <br>
			 <div align="right">
			 	<button type="submit" class="btn btn-lg btn-primary">ENVIAR</button>
			 </div>
	     </form>
	     <br>
	     <?php
	     if((isset($result))&&($result>=0)) {
		     if($result==0) echo '<div class="bg-success">Crédito APROVADO!</div>';
		     else echo '<div class="bg-danger">Crédito REPROVADO!</div>';
	     }
	     ?> 
	   </div>
	</body>
</html>
