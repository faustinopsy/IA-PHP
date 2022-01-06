<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Classification\KNearestNeighbors;

$knn = new KNearestNeighbors($k=1);

$samples = [[1], [11], [12], [17], [18], [64], [65]];
$labels = ['criança', 'criança', 'adolescente', 'adolescente', 'adulto', 'adulto', 'idoso'];

$knn->train($samples, $labels);

$input = [[10], [14], [13], [20], [70]];
$result = $knn->predict($input);

for($i=0; $i<count($result); $i++)
	echo "uma pessoa de " . $input[$i][0] . " anos de idade é $result[$i]\n";
