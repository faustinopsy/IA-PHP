<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Dataset\CsvDataset;

$dataset = new CsvDataset('dataset.csv', 2, true);

$data = $dataset->getSamples();

echo $data[0][0] . ": " . $data[0][1] . "\n";
echo $data[1][0] . ": " . $data[1][1] . "\n";
