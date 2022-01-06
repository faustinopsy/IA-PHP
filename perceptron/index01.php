<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Classification\MLPClassifier;

$mlp = new MLPClassifier(2, [1], [0, 1]);

$samples = [[0, 0], [0, 1], [1, 0], [1, 1]];
$targets = [0, 0, 0, 1];

$mlp->train($samples, $targets);

$predicted = $mlp->predict([[0, 0], [0, 1], [1, 0], [1, 1]]);

echo "0 and 0: " . $predicted[0] . "\n";
echo "0 and 1: " . $predicted[1] . "\n";
echo "1 and 0: " . $predicted[2] . "\n";
echo "1 and 1: " . $predicted[3] . "\n";
