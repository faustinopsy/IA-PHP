<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Classification\MLPClassifier;

$mlp = new MLPClassifier(
	1, 
	[5], 
	['um', 'dois', 'três', 'quatro', 'cinco', 'seis', 'sete', 'oito', 'nove', 'dez'], 
	50000,
	null,
	0.1
);

$samples = [[1], [2], [3], [4], [5], [6], [7], [8], [9], [10]];
$targets = ['um', 'dois', 'três', 'quatro', 'cinco', 'seis', 'sete', 'oito', 'nove', 'dez'];

$mlp->train($samples, $targets);

$predicted = $mlp->predict([[1], [2], [3], [4], [5], [6], [7], [8], [9], [10]]);

echo "classificação 1:  " . $predicted[0] . "\n";
echo "classificação 2:  " . $predicted[1] . "\n";
echo "classificação 3:  " . $predicted[2] . "\n";
echo "classificação 4:  " . $predicted[3] . "\n";
echo "classificação 5:  " . $predicted[4] . "\n";
echo "classificação 6:  " . $predicted[5] . "\n";
echo "classificação 7:  " . $predicted[6] . "\n";
echo "classificação 8:  " . $predicted[7] . "\n";
echo "classificação 9:  " . $predicted[8] . "\n";
echo "classificação 10: " . $predicted[9] . "\n";
