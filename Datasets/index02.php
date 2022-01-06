<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Dataset\ArrayDataset;

$dataset = new ArrayDataset([[-2, -1, 0], [-1, 0, 1]], ['falso', 'verdadeiro']);

$dataset->removeColumns([0, 1]);

$samples = $dataset->getSamples();
$targets = $dataset->getTargets();

//print_r($samples);

echo $samples[0][0] . ": " . $targets[0] . "\n";
echo $samples[1][0] . ": " . $targets[1] . "\n";
