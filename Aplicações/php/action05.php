<?php
if(isset($_POST['dias'])&&!empty($_POST['dias'])) $dias = $_POST['dias'];
else $dias = 0;

use Phpml\ModelManager;

if($dias==0) {
	$result = [];
}else {
	$input = [];
	$date = date('d-m-Y');
	for($i=1; $i<=$dias; $i++) {
		$date = date('d-m-Y', strtotime("+$i days", strtotime($date)));
		$array_date = explode("-", $date);
		$dia = intval($array_date[0]);
		$mes = intval($array_date[1]);
		$ano = intval($array_date[2]);
		$input[] = [$dia, $mes];
	}

	$filepath = __DIR__ . '/models/cotacao-do-btc';
	$modelManager = new ModelManager();
	$restoreClassifier = $modelManager->restoreFromFile($filepath);
	$result = $restoreClassifier->predict($input);
	
	$x = '[';
	$y = '[';
	for($i=0; $i<count($result); $i++) {
		$x .= $i+1 . ', ';
		$y .= number_format($result[$i], 4, '.', '') . ', '; 
	}
	$x .= ']';
	$y .= ']';
	$x = str_replace(', ]', ']', $x);
	$y = str_replace(', ]', ']', $y);
}
?>
