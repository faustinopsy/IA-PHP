<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Association\Apriori;

$associator = new Apriori();

$samples = [
	['camiseta', 'camisa', 'calça'],
	['tênis', 'sapato', 'bota'],
	['relógio', 'pulseira', 'colar'],
	['perfume', 'desodorante', 'creme']
];

$associator->train($samples, []);

$categoria1=1; // de zero a dois
$objeto1=0; //de zero a dois

$categoria2=2; // de zero a dois
$objeto2=2; //de zero a dois

$result = $associator->predict([[$samples[$categoria1][$objeto1]], [$samples[$categoria2][$objeto2]]]);
echo $result[0][0][0] . " está associado(a) ".$samples[$categoria1][$objeto1]."<br>";
echo $result[1][0][0] . " está associado(a) a ".$samples[$categoria2][$objeto2];
