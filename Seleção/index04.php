<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\FeatureSelection\SelectKBest;
use Phpml\Dataset\ArrayDataset;

$dataset = new ArrayDataset(
	$samples = [[1, 2, 1], [10, 20, 10], [3, 4, 3], [30, 40, 30]],
	$targets = ['menor', 'maior', 'menor', 'maior']
);

$selector = new SelectKBest(2);
$selector->fit($dataset->getSamples(), $dataset->getTargets());
$selector->transform($samples);

print_r($samples);
