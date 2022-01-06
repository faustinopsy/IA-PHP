<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Classification\SVC;

$classifier = new SVC();

$samples = [[36], [38], [40], [42], [44], [46], [48], [50], [52], [54]];
$labels = ['PP', 'P', 'M', 'M', 'M', 'M', 'M', 'M', 'GG', 'XG'];

$classifier->train($samples, $labels);

$result = $classifier->predict([[30], [52]]);
echo "o tamanho 40 é " . $result[0][0][0] . "\n";
echo "o tamanho 54 é " . $result[1][0][0] . "\n";
