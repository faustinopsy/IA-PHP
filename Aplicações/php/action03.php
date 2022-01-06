<?php
if(isset($_POST['tamanho'])&&!empty($_POST['tamanho'])) $tamanho = $_POST['tamanho'];
else $tamanho = 0;

if(isset($_POST['idade'])&&!empty($_POST['idade'])) $idade = $_POST['idade'];
else $idade = 0;

use Phpml\ModelManager;

if($tamanho+$idade==0) {
	$result = '';
}else {
	$filepath = __DIR__ . '/models/precificacao-de-imoveis';
	$modelManager = new ModelManager();
	$restoreClassifier = $modelManager->restoreFromFile($filepath);
	$result = $restoreClassifier->predict([$tamanho, $idade]);
	$result = number_format($result, 0, '.', '');
}
?>
