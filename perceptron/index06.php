<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Classification\MLPClassifier;

$mlp = new MLPClassifier(1, [5], ['um', 'dois', 'três', 'quatro', 'cinco', 'seis', 'sete'], 25000);

$samples = [[1], [2], [3], [4], [5], [6], [7]];
$targets = ['um', 'dois', 'três', 'quatro', 'cinco', 'seis', 'sete'];

$mlp->train($samples, $targets);

$predicted = $mlp->predict([[1], [2], [3], [4], [5], [6], [7]]);

echo "classificação 1: " . $predicted[0] . "\n";
echo "classificação 2: " . $predicted[1] . "\n";
echo "classificação 3: " . $predicted[2] . "\n";
echo "classificação 4: " . $predicted[3] . "\n";
echo "classificação 5: " . $predicted[4] . "\n";
echo "classificação 6: " . $predicted[5] . "\n";
echo "classificação 7: " . $predicted[6] . "\n";
