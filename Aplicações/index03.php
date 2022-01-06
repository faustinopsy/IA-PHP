<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Classification\SVC;
use Phpml\Dataset\CsvDataset;
use Phpml\ModelManager;

$dataset = new CsvDataset('credito.csv', 5, true);
$data = $dataset->getSamples();

$samples = [];
for($i=0; $i<count($data); $i++) {
	$samples[] = [$data[$i][0], $data[$i][1], $data[$i][2], $data[$i][3]];
}

$labels = [];
for($i=0; $i<count($data); $i++) {
	$labels[] = $data[$i][4];
}

$classifier = new SVC();
$classifier->train($samples, $labels);

$filepath = __DIR__ . '/php/models/analise-de-credito';
$modelManager = new ModelManager();
$modelManager->saveToFile($classifier, $filepath);

if(file_exists($filepath)) echo "modelo salvo com sucesso.";
