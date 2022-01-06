<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Classification\MLPClassifier;

use Phpml\NeuralNetwork\ActivationFunction\Sigmoid;
//use Phpml\NeuralNetwork\ActivationFunction\BinaryStep;
//use Phpml\NeuralNetwork\ActivationFunction\Gaussian;
//use Phpml\NeuralNetwork\ActivationFunction\HyperbolicTangent;
//use Phpml\NeuralNetwork\ActivationFunction\PReLU;
//use Phpml\NeuralNetwork\ActivationFunction\ThresholdedReLU;

$mlp = new MLPClassifier(1, [1], [0, 1], 1000, new Sigmoid);
//$mlp = new MLPClassifier(1, [1], [0, 1], 1000, new BinaryStep);
//$mlp = new MLPClassifier(1, [1], [0, 1], 1000, new Gaussian);
//$mlp = new MLPClassifier(1, [1], [0, 1], 1000, new HyperbolicTangent);
//$mlp = new MLPClassifier(1, [1], [0, 1], 1000, new PReLU);
//$mlp = new MLPClassifier(1, [1], [0, 1], 1000, new ThresholdedReLU);

$samples = [[0], [1]];
$targets = [1, 0];

$mlp->train($samples, $targets);

$predicted = $mlp->predict([[0], [1]]);

echo "0 invertido: " . $predicted[0] . "\n";
echo "1 invertido: " . $predicted[1] . "\n";
