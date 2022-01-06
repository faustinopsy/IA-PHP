<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Metric\Accuracy;

$metric = new Accuracy();

$actualLabels    = ['um', 'dois', 'um', 'dois'];
$predictedLabels = ['um', 'um',   'um', 'dois'];

$result = $metric->score($actualLabels, $predictedLabels);
echo $result . "\n";
echo "" . ($result*100) . "% dos elementos são iguais\n";
