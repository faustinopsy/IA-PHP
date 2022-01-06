<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Classification\MLPClassifier;

$mlp = new MLPClassifier(3, [1], [1, 2]);

$samples = [[0, 0, 1], [1, 1, 0], [2, 2, 2], [2, 2, 4]];
$targets = [1, 1, 2, 2];

$mlp->train($samples, $targets);

$predicted1 = $mlp->predict([0, 1, 0]);
$predicted2 = $mlp->predict([4, 2, 4]);

echo "classificação 1: " . $predicted1 . "\n";
echo "classificação 2: " . $predicted2 . "\n";
