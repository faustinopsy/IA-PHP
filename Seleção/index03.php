<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\FeatureSelection\SelectKBest;
use Phpml\Dataset\ArrayDataset;

$dataset = new ArrayDataset(
	$samples = [[1, 2], [10, 20], [3, 4], [30, 40]],
	$targets = ['menor', 'maior', 'menor', 'maior']
);

$selector = new SelectKBest(1);
$selector->fit($dataset->getSamples(), $dataset->getTargets());
$selector->transform($samples);

print_r($samples);
