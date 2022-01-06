<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Dataset\Demo\GlassDataset;
use Phpml\Classification\KNearestNeighbors;

$dataset = new GlassDataset();

$data = $dataset->getSamples();
$targets = $dataset->getTargets();

$samples = [];
$labels = [];
for($i=0; $i<count($data)-1; $i++) {
	$samples[] = [
					$data[$i][0], 
					$data[$i][1], 
					$data[$i][2], 
					$data[$i][3],
					$data[$i][4],
					$data[$i][5],
					$data[$i][6],
					$data[$i][7],
					$data[$i][8]
				];
	$labels[] = $targets[$i];
}

$knn = new KNearestNeighbors();
$knn->train($samples, $labels);

$index = count($data)-1;
$input = [
				$data[$index][0], 
				$data[$index][1], 
				$data[$index][2], 
				$data[$index][3],
				$data[$index][4],
				$data[$index][5],
				$data[$index][6],
				$data[$index][7],
				$data[$index][8]
			];
$result = $knn->predict($input);

echo "classificação: $result\n";
