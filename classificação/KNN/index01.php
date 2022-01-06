<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Classification\KNearestNeighbors;

$classifier = new KNearestNeighbors();

$samples = [[36], [38], [40], [42], [44], [46], [48], [50], [52], [54]];
$labels = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J'];

$classifier->train($samples, $labels);

$result = $classifier->predict([[40], [47]]);
echo "o tamanho 40 é " . $result[0][0][0] . "\n";
echo "o tamanho 55 é " . $result[1][0][0] . "\n";
