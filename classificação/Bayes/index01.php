<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Classification\NaiveBayes;

$classifier = new NaiveBayes();

$samples = [[36], [38], [40], [42], [44], [46], [48], [50], [52], [54]];
$labels = ['P', 'P', 'M', 'M', 'M', 'M', 'M', 'M', 'G', 'G'];

$classifier->train($samples, $labels);

$result = $classifier->predict([[40], [55]]);
echo "o tamanho 40 é " . $result[0][0][0] . "\n";
echo "o tamanho 55 é " . $result[1][0][0] . "\n";
