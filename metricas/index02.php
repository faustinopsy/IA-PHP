<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Metric\Accuracy;

$metric = new Accuracy();

$actualLabels    = ['um', 'dois', 'um', 'dois'];
$predictedLabels = ['um', 'um',   'um', 'dois'];

$result = $metric->score($actualLabels, $predictedLabels, false);
echo "" . $result . " dos elementos são iguais\n";
