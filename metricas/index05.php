<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Metric\ConfusionMatrix;

$metric = new ConfusionMatrix();

$actualLabels    = ['zero', 'zero', 'zero', 'um', 'um', 'um', 'um', 'um', 'um', 'um'];
$predictedLabels = ['zero', 'um', 'um', 'zero', 'zero', 'zero', 'um', 'um', 'um', 'um'];

$result = $metric->compute($actualLabels, $predictedLabels, ['zero', 'um']);

$validation = array();
foreach($result as $lines) {
	foreach($lines as $columns) {
		$validation[] = $columns;
	}
}

echo "acertou o falso:      " . $validation[0] . "\n";
echo "errou o falso:        " . $validation[1] . "\n";
echo "errou o verdadeiro:   " . $validation[2] . "\n";
echo "acertou o verdadeiro: " . $validation[3] . "\n";
