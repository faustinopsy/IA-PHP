<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Metric\ClassificationReport;

$actualLabels    = ['um', 'dois', 'um', 'dois'];
$predictedLabels = ['um', 'um',   'um', 'dois'];

$report = new ClassificationReport($actualLabels, $predictedLabels);

$result = $report->getRecall();
echo "para 'um' houve " . ($result['um']*100) . "% de acerto\n";
echo "para 'dois' houve " . ($result['dois']*100) . "% de acerto\n";

$result = $report->getSupport();
echo "para 'um' existem " . $result['um'] . " elemento(s)\n";
echo "para 'dois' existem " . $result['dois'] . " elemento(s)\n";
