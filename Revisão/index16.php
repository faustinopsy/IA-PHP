<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Dataset\Demo\IrisDataset;
use Phpml\Classification\SVC;

$dataset = new IrisDataset();

$data = $dataset->getSamples();
$targets = $dataset->getTargets();

$samples = [];
$labels = [];
for($i=0; $i<count($data)-1; $i++) {
	$samples[] = [$data[$i][0], $data[$i][1], $data[$i][2], $data[$i][3]];
	$labels[] = $targets[$i];
}

$svc = new SVC();
$svc->train($samples, $labels);

$index = count($data)-1;
$input = [$data[$index][0], $data[$index][1], $data[$index][2], $data[$index][3]];
$result = $svc->predict($input);

echo "classificação: $result\n";
