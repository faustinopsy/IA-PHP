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

$result = $associator->predict([$samples[0][0], $samples[0][2]]);
echo $result[0][0] . " está associado(a) ".$samples[0][0]." e ".$samples[0][2];
