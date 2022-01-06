<?php
if(isset($_POST['idade'])&&!empty($_POST['idade'])) $idade = $_POST['idade'];
else $idade = 0;

if(isset($_POST['profissao'])&&!empty($_POST['profissao'])) $profissao = $_POST['profissao'];
else $profissao = 0;

if(isset($_POST['salario'])&&!empty($_POST['salario'])) $salario = $_POST['salario'];
else $salario = 0;

if(isset($_POST['sexo'])&&!empty($_POST['sexo'])) $sexo = $_POST['sexo'];
else $sexo = 0;

use Phpml\ModelManager;

if($idade+$profissao+$salario+$sexo==0) {
	$result = -1;
}else {
	$filepath = __DIR__ . '/models/analise-de-credito';
	$modelManager = new ModelManager();
	$restoreClassifier = $modelManager->restoreFromFile($filepath);
	$result = $restoreClassifier->predict([$idade, $profissao, $salario, $sexo]);
}
?>
