<?php
// php -S localhost:8080
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/php/action01.php';
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
	     <div class="bg-primary text-white" align="center">
	     	|<a href="index01.php?imagem=img/exemples/acao/img01.jpg" class="text-white">AÇÃO</a>
		 	|<a href="index01.php?imagem=img/exemples/comedia/img01.jpg" class="text-white">COMÉDIA</a>
		 	|<a href="index01.php?imagem=img/exemples/drama/img01.jpg" class="text-white">DRAMA</a>|
	     </div>
	     <br>
	     <table width="100%">
		 	<tr align="center">
		 		<td colspan="4">
		 			<img src="<?php echo $imagem; ?>" width="300px" height="200px">
		 		</td>
		 	</tr>
	     </table>
	     <br>
		 <table width="100%">
			<tr align="center">
				<td>
					<a href="index01.php?imagem=<?php echo $result[0][0]; ?>">
						<img src="<?php echo $result[0][0]; ?>" width="150px" height="100px">
					</a>
				</td>
				<td>
					<a href="index01.php?imagem=<?php echo $result[1][0]; ?>">
						<img src="<?php echo $result[1][0]; ?>" width="150px" height="100px">
					</a>
				</td>
				<td>
					<a href="index01.php?imagem=<?php echo $result[2][0]; ?>">
						<img src="<?php echo $result[2][0]; ?>" width="150px" height="100px">
					</a>
				</td>
				<td>
					<a href="index01.php?imagem=<?php echo $result[3][0]; ?>">
						<img src="<?php echo $result[3][0]; ?>" width="150px" height="100px">
					</a>
				</td>
			</tr>
		 </table>

	   </div>
	</body>
</html>
