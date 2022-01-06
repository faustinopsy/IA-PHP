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

$categoria=1; // de ero a dois
$objeto=2; //de zero a dois
$result = $associator->predict([$samples[$categoria][$objeto]]);
echo $result[0][0] . " e " . $result[1][0] . " estão associados a ". $samples[$categoria][$objeto];
