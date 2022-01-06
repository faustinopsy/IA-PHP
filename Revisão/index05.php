<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Classification\NaiveBayes;

$bayes = new NaiveBayes();

$samples = [[45, 100000], [50, 200000], [100, 100000]];
$labels = ['justo', 'caro', 'barato'];

$bayes->train($samples, $labels);

$input = [55, 100000];
$result = $bayes->predict($input);

echo "um apartamento com $input[0]m² por R$ $input[1],00 está com um preço $result\n";
