<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Regression\LeastSquares;
use Phpml\Dataset\CsvDataset;
use Phpml\ModelManager;

$dataset = new CsvDataset('imoveis.csv', 3, true);
$data = $dataset->getSamples();

$samples = [];
for($i=0; $i<count($data); $i++) {
	$samples[] = [$data[$i][0], $data[$i][1]];
}

$labels = [];
for($i=0; $i<count($data); $i++) {
	$labels[] = $data[$i][2];
}

$classifier = new LeastSquares();
$classifier->train($samples, $labels);

$filepath = __DIR__ . '/php/models/precificacao-de-imoveis';
$modelManager = new ModelManager();
$modelManager->saveToFile($classifier, $filepath);

if(file_exists($filepath)) echo "modelo salvo com sucesso.";
