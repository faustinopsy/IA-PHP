<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Classification\SVC;

$classifier = new SVC();

$samples = [[36, 38], [40, 42], [44, 46], [48, 50], [52, 54]];
$labels = ['X', 'P', 'M', 'G', 'U'];

$classifier->train($samples, $labels);

$result = $classifier->predict([44]);
echo "o seu tamanho é " . $result[0][0] . "\n";
