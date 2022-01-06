<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\CrossValidation\RandomSplit;
use Phpml\Dataset\ArrayDataset;
use Phpml\Classification\MLPClassifier;

$dataset = new ArrayDataset(
	$samples = [[0], [0], [1], [1], [0], [0], [1], [1]],
	$targets = ['falso', 'falso', 'verdadeiro', 'verdadeiro', 'falso', 'falso', 'verdadeiro', 'verdadeiro']
);

$dataset = new RandomSplit($dataset);

$trainSamples = $dataset->getTrainSamples();
$trainLabels = $dataset->getTrainLabels();

$testSamples = $dataset->getTestSamples();

$mlp = new MLPClassifier(1, [2], ['falso', 'verdadeiro']);
$mlp->train($trainSamples, $trainLabels);
$testLabels = $mlp->predict($testSamples);

echo $testSamples[0][0] . ": " . $testLabels[0] . "\n";
echo $testSamples[1][0] . ": " . $testLabels[1] . "\n";
echo $testSamples[2][0] . ": " . $testLabels[2] . "\n";
