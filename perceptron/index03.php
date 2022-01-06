<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Classification\MLPClassifier;

$mlp = new MLPClassifier(2, [2], [0, 1]);

$samples = [[0, 0], [0, 1], [1, 0], [1, 1]];
$targets = [0, 1, 1, 0];

$mlp->train($samples, $targets);

$predicted = $mlp->predict([[0, 0], [0, 1], [1, 0], [1, 1]]);

echo "0 xor 0: " . $predicted[0] . "\n";
echo "0 xor 1: " . $predicted[1] . "\n";
echo "1 xor 0: " . $predicted[2] . "\n";
echo "1 xor 1: " . $predicted[3] . "\n";
