<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Classification\MLPClassifier;
use Phpml\NeuralNetwork\Layer;

$hiddenLayer = new Layer(2);
$mlp = new MLPClassifier(1, [$hiddenLayer], [0, 1]);

$samples = [[0], [1], [0], [1]];
$labels = [0, 1, 0, 1];

$targets = ['falso', 'verdadeiro'];

$mlp->train($samples, $labels);

$input = [[0], [1]];
$result = $mlp->predict($input);

for($i=0; $i<count($result); $i++)
	echo $input[$i][0] . ': ' . $targets[round($result[$i])] . "\n";
