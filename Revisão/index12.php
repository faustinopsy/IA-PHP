<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Classification\MLPClassifier;
use Phpml\NeuralNetwork\Layer;

$hiddenLayer1 = new Layer(2);
$hiddenLayer2 = new Layer(2);
$mlp = new MLPClassifier(1, [$hiddenLayer1, $hiddenLayer2], [0, 1]);

$samples = [[0], [1], [10], [20]];
$labels = [0, 0, 1, 1];

$targets = ['dígito', 'dezena'];

$mlp->train($samples, $labels);

$input = [[2], [55]];
$result = $mlp->predict($input);

for($i=0; $i<count($result); $i++)
	echo $input[$i][0] . ': ' . $targets[round($result[$i])] . "\n";
