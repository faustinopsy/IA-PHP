<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Dataset\ArrayDataset;

$dataset = new ArrayDataset([[0], [1]], ['falso', 'verdadeiro']);

$samples = $dataset->getSamples();
$targets = $dataset->getTargets();

echo $samples[0][0] . ": " . $targets[0] . "\n";
echo $samples[1][0] . ": " . $targets[1] . "\n";
